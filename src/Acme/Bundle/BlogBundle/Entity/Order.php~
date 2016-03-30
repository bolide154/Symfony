<?php

namespace Acme\Bundle\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 */
class Order
{
    /**
     * @var string
     */
    private $shippingAddress;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var integer
     */
    private $statusId;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Acme\Bundle\BlogBundle\Entity\Customer
     */
    private $customer;


    /**
     * Set shippingAddress
     *
     * @param string $shippingAddress
     * @return Order
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * Get shippingAddress
     *
     * @return string 
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     * @return Order
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime 
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return Order
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime 
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set statusId
     *
     * @param integer $statusId
     * @return Order
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return integer 
     */
    public function getStatusId()
    {
        return $this->statusId;
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
     * Set customer
     *
     * @param \Acme\Bundle\BlogBundle\Entity\Customer $customer
     * @return Order
     */
    public function setCustomer(\Acme\Bundle\BlogBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \Acme\Bundle\BlogBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
