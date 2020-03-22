<?php

namespace Tracker\BillingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Purchase
 */
class Purchase
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $invoice;
    
    /**
     * @var \Tracker\UserBundle\Entity\User
     */
    private $user;


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
     * Set created
     *
     * @param \DateTime $created
     * @return Purchase
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Purchase
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set invoice
     *
     * @param string $invoice
     * @return Purchase
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return string 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }


    /**
     * Set user
     *
     * @param \Tracker\UserBundle\Entity\User $user
     * @return Purchase
     */
    public function setUser(\Tracker\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Tracker\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->created = new \DateTime();
    }
    /**
     * @var \Tracker\BillingBundle\Entity\Option
     */
    private $option;


    /**
     * Set option
     *
     * @param \Tracker\BillingBundle\Entity\Option $option
     * @return Purchase
     */
    public function setOption(\Tracker\BillingBundle\Entity\Option $option = null)
    {
        $this->option = $option;

        return $this;
    }

    /**
     * Get option
     *
     * @return \Tracker\BillingBundle\Entity\Option 
     */
    public function getOption()
    {
        return $this->option;
    }
}
