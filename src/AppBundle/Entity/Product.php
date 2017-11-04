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
     * @ORM\Column(type="string")
     */
    private $price;

    /**
     * @ORM\Column(type="string")
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


}

