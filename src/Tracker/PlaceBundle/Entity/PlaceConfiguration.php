<?php

namespace Tracker\PlaceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 */
class PlaceConfiguration
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
     * @var string
     */
    private $modified;

    /**
     * @var \Tracker\PlaceBundle\Entity\Place
     */
    private $place;

    /**
     * @var \Tracker\BoxBundle\Entity\Configuration
     */
    private $configuration;


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
     * @return Option
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
     * @return Option
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
     * @param string $modified
     * @return Option
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return string 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set Place
     *
     * @param \Tracker\PlaceBundle\Entity\Place $place
     * @return Option
     */
    public function setPlace(\Tracker\PlaceBundle\Entity\Place $place = null)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get Place
     *
     * @return \Tracker\PlaceBundle\Entity\Place 
     */
    public function getPlace()
    {
        return $this->place;
    }

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
     * Set configuration
     *
     * @param \Tracker\BoxBundle\Entity\Configuration $configuration
     * @return PlaceConfiguration
     */
    public function setConfiguration(\Tracker\BoxBundle\Entity\Configuration $configuration = null)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Get configuration
     *
     * @return \Tracker\BoxBundle\Entity\Configuration 
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
}
