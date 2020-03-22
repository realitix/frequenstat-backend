<?php

namespace Tracker\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 */
class Ticket
{
    const TYPE_TECHNICAL  = 1;
    const TYPE_COMMERCIAL = 2;
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var string
     */
    private $name;
    
    /**
     * @var string
     */
    private $description;
    
    /**
     * @var \DateTime
     */
    private $created;
    
    /**
     * @var \DateTime
     */
    private $closed;

    /**
     * @var \Tracker\UserBundle\Entity\User
     */
    private $user;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $messages;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set type
     *
     * @param integer $type
     * @return Ticket
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
     * Get type description
     *
     * @return string 
     */
    public function getTypeDescription()
    {
        $message = '';
        switch($this->type) {
            case self::TYPE_TECHNICAL:
               $message = 'Support Technique';
               break;
            case self::TYPE_COMMERCIAL:
                $message = 'Support commercial';
                break;
        }
        
        return $message;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Ticket
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Ticket
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
     * @return Ticket
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
     * Set description
     *
     * @param string $description
     * @return Ticket
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    


    /**
     * Set closed
     *
     * @param \DateTime $closed
     * @return Ticket
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }

    /**
     * Get closed
     *
     * @return \DateTime 
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Add messages
     *
     * @param \Tracker\TicketBundle\Entity\Message $messages
     * @return Ticket
     */
    public function addMessage(\Tracker\TicketBundle\Entity\Message $messages)
    {
        $this->messages[] = $messages;

        return $this;
    }

    /**
     * Remove messages
     *
     * @param \Tracker\TicketBundle\Entity\Message $messages
     */
    public function removeMessage(\Tracker\TicketBundle\Entity\Message $messages)
    {
        $this->messages->removeElement($messages);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessages()
    {
        return $this->messages;
    }
}
