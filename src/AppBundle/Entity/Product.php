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


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Class Product
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="product")
 */

class Product {

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
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $description_full;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $price_supplier;

    /**
     * @ORM\Column(type="string")
     */
    private $reference;

    /**
     * @ORM\Column(type="string")
     */
    private $reference_supplier;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Brand")
     */
    private $brand;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescriptionFull()
    {
        return $this->description_full;
    }

    /**
     * @param mixed $description_full
     */
    public function setDescriptionFull($description_full)
    {
        $this->description_full = $description_full;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPriceSupplier()
    {
        return $this->price_supplier;
    }

    /**
     * @param mixed $price_supplier
     */
    public function setPriceSupplier($price_supplier)
    {
        $this->price_supplier = $price_supplier;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getReferenceSupplier()
    {
        return $this->reference_supplier;
    }

    /**
     * @param mixed $reference_supplier
     */
    public function setReferenceSupplier($reference_supplier)
    {
        $this->reference_supplier = $reference_supplier;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand(Brand $brand) {
        $this->brand = $brand;
    }


    function __toString()
    {
        if(is_null($this->getName())) {
            return 'NULL';
        }
        return $this->getName();
    }


}

