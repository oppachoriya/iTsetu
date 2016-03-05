<?php

namespace AdsCottage\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Postal
 *
 * @ORM\Table(name="postal")
 * @ORM\Entity
 */
class Postal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=2, nullable=true)
     */
    private $countryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=20, nullable=true)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="place_name", type="string", length=180, nullable=true)
     */
    private $placeName;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_name1", type="string", length=100, nullable=true)
     */
    private $adminName1;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_code1", type="string", length=20, nullable=true)
     */
    private $adminCode1;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_name2", type="string", length=100, nullable=true)
     */
    private $adminName2;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_code2", type="string", length=20, nullable=true)
     */
    private $adminCode2;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_name3", type="string", length=100, nullable=true)
     */
    private $adminName3;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_code3", type="string", length=20, nullable=true)
     */
    private $adminCode3;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="accuracy", type="integer", nullable=true)
     */
    private $accuracy;



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
     * Set countryCode
     *
     * @param string $countryCode
     * @return Postal
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string 
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     * @return Postal
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string 
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set placeName
     *
     * @param string $placeName
     * @return Postal
     */
    public function setPlaceName($placeName)
    {
        $this->placeName = $placeName;

        return $this;
    }

    /**
     * Get placeName
     *
     * @return string 
     */
    public function getPlaceName()
    {
        return $this->placeName;
    }

    /**
     * Set adminName1
     *
     * @param string $adminName1
     * @return Postal
     */
    public function setAdminName1($adminName1)
    {
        $this->adminName1 = $adminName1;

        return $this;
    }

    /**
     * Get adminName1
     *
     * @return string 
     */
    public function getAdminName1()
    {
        return $this->adminName1;
    }

    /**
     * Set adminCode1
     *
     * @param string $adminCode1
     * @return Postal
     */
    public function setAdminCode1($adminCode1)
    {
        $this->adminCode1 = $adminCode1;

        return $this;
    }

    /**
     * Get adminCode1
     *
     * @return string 
     */
    public function getAdminCode1()
    {
        return $this->adminCode1;
    }

    /**
     * Set adminName2
     *
     * @param string $adminName2
     * @return Postal
     */
    public function setAdminName2($adminName2)
    {
        $this->adminName2 = $adminName2;

        return $this;
    }

    /**
     * Get adminName2
     *
     * @return string 
     */
    public function getAdminName2()
    {
        return $this->adminName2;
    }

    /**
     * Set adminCode2
     *
     * @param string $adminCode2
     * @return Postal
     */
    public function setAdminCode2($adminCode2)
    {
        $this->adminCode2 = $adminCode2;

        return $this;
    }

    /**
     * Get adminCode2
     *
     * @return string 
     */
    public function getAdminCode2()
    {
        return $this->adminCode2;
    }

    /**
     * Set adminName3
     *
     * @param string $adminName3
     * @return Postal
     */
    public function setAdminName3($adminName3)
    {
        $this->adminName3 = $adminName3;

        return $this;
    }

    /**
     * Get adminName3
     *
     * @return string 
     */
    public function getAdminName3()
    {
        return $this->adminName3;
    }

    /**
     * Set adminCode3
     *
     * @param string $adminCode3
     * @return Postal
     */
    public function setAdminCode3($adminCode3)
    {
        $this->adminCode3 = $adminCode3;

        return $this;
    }

    /**
     * Get adminCode3
     *
     * @return string 
     */
    public function getAdminCode3()
    {
        return $this->adminCode3;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Postal
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Postal
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set accuracy
     *
     * @param integer $accuracy
     * @return Postal
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;

        return $this;
    }

    /**
     * Get accuracy
     *
     * @return integer 
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }
}
