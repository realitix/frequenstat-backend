<?php

namespace Tracker\PlaceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 */
class Place
{
	const TYPE_STATBOX = 1;
	const TYPE_STATBOX3D = 2;
	const TYPE_CROWD = 4;
	const TYPE_IMPLANTATION = 3;
	
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;
    
    /**
     * @var string
     */
    private $address;
    
    /**
     * @var integer
     */
    private $placeType;
    
    /**
     * @var \Tracker\UserBundle\User
     */
    private $user;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $boxes;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $configurations;
    
        /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $modified;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->boxes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->configurations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Automatically launched
     */
    public function prePersist()
    {
        $this->created  = new \DateTime();
        $this->modified = new \DateTime();
    }

    /**
     * Automatically launched
     */
    public function preUpdate()
    {
        $this->modified = new \DateTime();
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
     * Set name
     *
     * @param string $name
     * @return Place
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
     * @return Place
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
     * Set modified
     *
     * @param \DateTime $modified
     * @return Place
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set user
     *
     * @param \Tracker\UserBundle\Entity\User $user
     * @return Place
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
     * Add boxes
     *
     * @param \Tracker\PlaceBundle\Entity\Box $boxes
     * @return Place
     */
    public function addBox(\Tracker\PlaceBundle\Entity\Box $boxes)
    {
        $this->boxes[] = $boxes;

        return $this;
    }

    /**
     * Remove boxes
     *
     * @param \Tracker\PlaceBundle\Entity\Box $boxes
     */
    public function removeBox(\Tracker\PlaceBundle\Entity\Box $boxes)
    {
        $this->boxes->removeElement($boxes);
    }

    /**
     * Get boxes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBoxes()
    {
        return $this->boxes;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Place
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set placeType
     *
     * @param integer $placeType
     * @return Place
     */
    public function setPlaceType($placeType)
    {
        $this->placeType = $placeType;

        return $this;
    }

    /**
     * Get placeType
     *
     * @return integer 
     */
    public function getPlaceType()
    {
        return $this->placeType;
    }
    
    public function getTypeName()
    {
    	switch($this->placeType) {
    		case self::TYPE_STATBOX:
    			return 'StatBox';
    		case self::TYPE_STATBOX3D:
    			return 'StatBox3D';
    		case self::TYPE_CROWD:
    			return 'Foule';
    		case self::TYPE_IMPLANTATION:
    			return 'Implanatation';
    	}
    	return 'Inconnu';
    }
    


    /**
     * Add configurations
     *
     * @param \Tracker\PlaceBundle\Entity\PlaceConfiguration $configurations
     * @return Place
     */
    public function addConfiguration(\Tracker\PlaceBundle\Entity\PlaceConfiguration $configurations)
    {
        $this->configurations[] = $configurations;

        return $this;
    }

    /**
     * Remove configurations
     *
     * @param \Tracker\PlaceBundle\Entity\PlaceConfiguration $configurations
     */
    public function removeConfiguration(\Tracker\PlaceBundle\Entity\PlaceConfiguration $configurations)
    {
        $this->configurations->removeElement($configurations);
    }

    /**
     * Get configurations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConfigurations()
    {
        return $this->configurations;
    }
}
