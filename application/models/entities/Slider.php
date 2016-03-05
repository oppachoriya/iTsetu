<?php

namespace AdsCottage\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slider
 *
 * @ORM\Table(name="slider")
 * @ORM\Entity
 */
class Slider
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=250, nullable=false)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="headingText", type="string", length=100, nullable=true)
     */
    private $headingtext;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionText", type="text", nullable=true)
     */
    private $descriptiontext;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="animationImgPath", type="string", length=250, nullable=true)
     */
    private $animationimgpath;

    /**
     * @var string
     *
     * @ORM\Column(name="buttonText", type="string", length=50, nullable=true)
     */
    private $buttontext;

    /**
     * @var string
     *
     * @ORM\Column(name="landingURL", type="string", length=250, nullable=false)
     */
    private $landingurl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="date", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="date", nullable=true)
     */
    private $enddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;



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
     * Set path
     *
     * @param string $path
     * @return Slider
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set headingtext
     *
     * @param string $headingtext
     * @return Slider
     */
    public function setHeadingtext($headingtext)
    {
        $this->headingtext = $headingtext;

        return $this;
    }

    /**
     * Get headingtext
     *
     * @return string 
     */
    public function getHeadingtext()
    {
        return $this->headingtext;
    }

    /**
     * Set descriptiontext
     *
     * @param string $descriptiontext
     * @return Slider
     */
    public function setDescriptiontext($descriptiontext)
    {
        $this->descriptiontext = $descriptiontext;

        return $this;
    }

    /**
     * Get descriptiontext
     *
     * @return string 
     */
    public function getDescriptiontext()
    {
        return $this->descriptiontext;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Slider
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set animationimgpath
     *
     * @param string $animationimgpath
     * @return Slider
     */
    public function setAnimationimgpath($animationimgpath)
    {
        $this->animationimgpath = $animationimgpath;

        return $this;
    }

    /**
     * Get animationimgpath
     *
     * @return string 
     */
    public function getAnimationimgpath()
    {
        return $this->animationimgpath;
    }

    /**
     * Set buttontext
     *
     * @param string $buttontext
     * @return Slider
     */
    public function setButtontext($buttontext)
    {
        $this->buttontext = $buttontext;

        return $this;
    }

    /**
     * Get buttontext
     *
     * @return string 
     */
    public function getButtontext()
    {
        return $this->buttontext;
    }

    /**
     * Set landingurl
     *
     * @param string $landingurl
     * @return Slider
     */
    public function setLandingurl($landingurl)
    {
        $this->landingurl = $landingurl;

        return $this;
    }

    /**
     * Get landingurl
     *
     * @return string 
     */
    public function getLandingurl()
    {
        return $this->landingurl;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Slider
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return Slider
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime 
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return Slider
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }
}
