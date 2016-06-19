<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colors
 *
 * @ORM\Table(name="Colors", indexes={@ORM\Index(name="fk_year_id", columns={"year_id"})})
 * @ORM\Entity
 */
class Colors
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
     * @var integer
     *
     * @ORM\Column(name="year_id", type="integer", nullable=false)
     */
    private $yearId;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=false)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="color_group", type="string", length=45, nullable=false)
     */
    private $colorGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="color_code", type="string", length=45, nullable=false)
     */
    private $colorCode;



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
     * Set yearId
     *
     * @param integer $yearId
     *
     * @return Colors
     */
    public function setYearId($yearId)
    {
        $this->yearId = $yearId;

        return $this;
    }

    /**
     * Get yearId
     *
     * @return integer
     */
    public function getYearId()
    {
        return $this->yearId;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Colors
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set colorGroup
     *
     * @param string $colorGroup
     *
     * @return Colors
     */
    public function setColorGroup($colorGroup)
    {
        $this->colorGroup = $colorGroup;

        return $this;
    }

    /**
     * Get colorGroup
     *
     * @return string
     */
    public function getColorGroup()
    {
        return $this->colorGroup;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Colors
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set colorCode
     *
     * @param string $colorCode
     *
     * @return Colors
     */
    public function setColorCode($colorCode)
    {
        $this->colorCode = $colorCode;

        return $this;
    }

    /**
     * Get colorCode
     *
     * @return string
     */
    public function getColorCode()
    {
        return $this->colorCode;
    }
}
