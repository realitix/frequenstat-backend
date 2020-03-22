<?php

namespace Tracker\ObjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Object
 */
class Object
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
     * @var geometry
     */
    private $model;

    /**
     * @var \DateTime
     */
    private $created;
    
    /**
     * @var \Tracker\PlaceBundle\Entity\Room
     */
    private $room;


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
     * @return Object
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
     * Set model
     *
     * @param geometry $model
     * @return Object
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return geometry 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Object
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
     * Set room
     *
     * @param \Tracker\PlaceBundle\Entity\Room $room
     * @return Object
     */
    public function setRoom(\Tracker\PlaceBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \Tracker\PlaceBundle\Entity\Room 
     */
    public function getRoom()
    {
        return $this->room;
    }
    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->created = new \DateTime();
    }
}
