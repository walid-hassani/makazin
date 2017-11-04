<?php
/*
 * This file is part of the Makazin package.
 *
 * (c) 2017 Arionys.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Walid Hassani <w.hassani@arionys.com>
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="address")
 */
class Address {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     */
    private $street;

    /**
     * @ORM\Column(type="string")
     */
    private $streetComplement;

    /**
     * @ORM\Column(type="string")
     */
    private $state;

    /**
     * @ORM\Column(type="string")
     */
    private $city;

    /**
     * @ORM\Column(type="integer")
     */
    private $zipCode;

    /**
     * @ORM\Column(type="string")
     */
    private $country;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isForShipping;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isForBilling;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isMain;

    private $user_id;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getStreetComplement()
    {
        return $this->streetComplement;
    }

    /**
     * @param mixed $streetComplement
     */
    public function setStreetComplement($streetComplement)
    {
        $this->streetComplement = $streetComplement;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param mixed $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getisForShipping()
    {
        return $this->isForShipping;
    }

    /**
     * @param mixed $isForShipping
     */
    public function setIsForShipping($isForShipping)
    {
        $this->isForShipping = $isForShipping;
    }

    /**
     * @return mixed
     */
    public function getisForBilling()
    {
        return $this->isForBilling;
    }

    /**
     * @param mixed $isForBilling
     */
    public function setIsForBilling($isForBilling)
    {
        $this->isForBilling = $isForBilling;
    }

    /**
     * @return mixed
     */
    public function getisMain()
    {
        return $this->isMain;
    }

    /**
     * @param mixed $isMain
     */
    public function setIsMain($isMain)
    {
        $this->isMain = $isMain;
    }

    
}