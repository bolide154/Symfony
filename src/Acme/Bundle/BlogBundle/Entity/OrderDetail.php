<?php

namespace Acme\Bundle\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDetail
 */
class OrderDetail
{
    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var string
     */
    private $price;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Acme\Bundle\BlogBundle\Entity\Product
     */
    private $product;

    /**
     * @var \Acme\Bundle\BlogBundle\Entity\Order
     */
    private $order;


    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return OrderDetail
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return OrderDetail
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

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
     * Set product
     *
     * @param \Acme\Bundle\BlogBundle\Entity\Product $product
     * @return OrderDetail
     */
    public function setProduct(\Acme\Bundle\BlogBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Acme\Bundle\BlogBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set order
     *
     * @param \Acme\Bundle\BlogBundle\Entity\Order $order
     * @return OrderDetail
     */
    public function setOrder(\Acme\Bundle\BlogBundle\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \Acme\Bundle\BlogBundle\Entity\Order 
     */
    public function getOrder()
    {
        return $this->order;
    }
}
