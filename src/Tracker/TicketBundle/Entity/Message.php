<?php

namespace Tracker\TicketBundle\Entity;

/**
 * Message
 */
class Message
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $created;
    
    /**
     * @var \Tracker\UserBundle\Entity\User
     */
    private $user;
    
    /**
     * @var \Tracker\TicketBundle\Entity\Ticket
     */
    private $ticket;
    
    /**
     * @var boolean
     */
    private $close;
    
    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->created = new \DateTime();
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
     * Set content
     *
     * @param string $content
     * @return Message
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Message
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
     * Set user
     *
     * @param \Tracker\UserBundle\Entity\User $user
     * @return Message
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
     * Set ticket
     *
     * @param \Tracker\TicketBundle\Entity\Ticket $ticket
     * @return Message
     */
    public function setTicket(\Tracker\TicketBundle\Entity\Ticket $ticket = null)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return \Tracker\TicketBundle\Entity\Ticket 
     */
    public function getTicket()
    {
        return $this->ticket;
    }
    
    /**
     * Set close
     *
     * @param boolean $close
     * @return Message
     */
    public function setClose($close)
    {
        $this->close = $close;

        return $this;
    }

    /**
     * Get close
     *
     * @return boolean 
     */
    public function getClose()
    {
        return $this->close;
    }
}
