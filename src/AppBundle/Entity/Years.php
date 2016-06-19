<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Years
 *
 * @ORM\Table(name="Years", indexes={@ORM\Index(name="fk_model_id", columns={"model_id"})})
 * @ORM\Entity
 */
class Years
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=45, nullable=false)
     */
    private $year;

    /**
     * @var integer
     *
     * @ORM\Column(name="model_id", type="integer", nullable=false)
     */
    private $modelId;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return Years
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set modelId
     *
     * @param integer $modelId
     *
     * @return Years
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Get modelId
     *
     * @return integer
     */
    public function getModelId()
    {
        return $this->modelId;
    }
}
