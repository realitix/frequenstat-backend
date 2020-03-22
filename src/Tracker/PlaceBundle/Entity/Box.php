<?php

namespace Tracker\PlaceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Box
 */
class Box
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;
    
    /**
     * @var \Tracker\PlaceBundle\Entity\Place
     */
    private $place;
    
    /**
     * @var string
     */
    private $serialNumber;
    
    /**
     * @var integer
     */
    private $version;
    
    /**
     * @var point
     */
    private $position;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $modified;

	/**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->created = new \DateTime();
        $this->modified = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
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
     * @return Box
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
     * Set place
     *
     * @param \Tracker\PlaceBundle\Entity\Place $place
     * @return Box
     */
    public function setPlace(\Tracker\PlaceBundle\Entity\Place $place = null)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return \Tracker\PlaceBundle\Entity\Place 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set serialNumber
     *
     * @param string $serialNumber
     * @return Box
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * Get serialNumber
     *
     * @return string 
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Box
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
     * @return Box
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
     * Set version
     *
     * @param integer $version
     * @return Box
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set position
     *
     * @param point $position
     * @return Box
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return point 
     */
    public function getPosition()
    {
        return $this->position;
    }
}
