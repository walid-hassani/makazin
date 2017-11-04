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

    private $id;

    private $name;

    private $description;

    private $description_full;

    private $price;

    private $price_supplier;

    private $reference;

    private $reference_supplier;

}

