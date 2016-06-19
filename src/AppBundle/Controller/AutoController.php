<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Brands;
use AppBundle\Entity\Colors;
use AppBundle\Entity\Models;
use AppBundle\Entity\Years;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class AutoController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

        //Получаем все машины из базы данных
        $brands = $this->get('doctrine')->getRepository('AppBundle:Brands')->createQueryBuilder('a')->getQuery()->getArrayResult();

        return $this->render('main.html.twig', [
            'brands' => $brands,
        ]);
    }

    /**
     * @Route("/model/{brandId}")
     */
    public function loadModelByBrandIdAction($brandId)
    {

        $models = $this->get('doctrine')->getRepository('AppBundle:Models')->createQueryBuilder('a')
        ->where('a.brandId = :brandId')
        ->setParameter('brandId', $brandId)
        ->getQuery()
        ->getArrayResult();

        return new JsonResponse($models);
    }

    /**
     * @Route("/year/{modelId}")
     */
    public function loadYearByModelIdAction($modelId)
    {
        $years = $this->get('doctrine')->getRepository('AppBundle:Years')->createQueryBuilder('a')
        ->where('a.modelId = :modelId')
        ->setParameter('modelId', $modelId)
        ->getQuery()
        ->getArrayResult();

        return new JsonResponse($years);
    }

    /**
     * @Route("/color/year/{yearId}/model/{modelId}/brand/{brandId}/type/{type}")
     */
    public function loadColorByYearIdAction($yearId, $modelId, $brandId, $type)
    {
        $auto = $this->setAuto($yearId, $modelId, $brandId, $type);

        $colors = $this->get('doctrine')->getRepository('AppBundle:Colors')->createQueryBuilder('a')
        ->where('a.yearId = :yearId')
        ->setParameter('yearId', $yearId)
        ->getQuery()
        ->getArrayResult();

        return $this->render('colors.html.twig', [
            'colors' => $colors,
            'auto' => $auto,
        ]);
    }

    public function setAuto($yearId, $modelId, $brandId, $type){
        //Получаем сессию
        $session = $this->get('session');
        //Сохраняем в сессию выбранное нами авто (параметры)

        $brand = $this->getById('Brands', $brandId);
        $model = $this->getById('Models', $modelId);
        $year = $this->getById('Years', $yearId);

        $session->set('auto', [ "brand" =>  $brand->getBrand(), "model" => $model->getModel(), "year" => $year->getYear(), "paint" => $type]);
        return $session->get('auto');
    }

    public function getById($entity, $id){
        $result = $this->get('doctrine')->getRepository('AppBundle:' . ucfirst($entity))->findOneById($id);
        return $result;
    }

    /**
     * @Route("/feedback/color/{colorId}")
     */
    public function feedback($colorId)
    {
        $color = $this->getById('Colors', $colorId);
        $session = $this->get('session');
        $session->set('color', ['color' => $color->getTitle()]);

        $auto = $session->get('auto');

        return $this->render('feedback.html.twig', [
            'auto' => $auto,
            'color' => $color->getTitle(),
        ]);
    }

    /**
     * @Route("/order-create")
     */
    public function orderCreate()
    {
        $session = $this->get('session');
        $request = $this->get('request_stack')->getCurrentRequest()->request;

        $order = [

            'auto' => $session->get('auto'),
            'color' => $session->get('color'),
            'customer' => [

                'name' => $request->get('name'),
                'phone' => $request->get('phone'),
                'email' => $request->get('email')

            ]

        ];

        //print_r($order);die;

        return $this->render('order.html.twig', [
            'order' => $order,
        ]);
    }


}
