<?php

namespace Tracker\CaptureBundle\Entity;


/**
 * CaptureCache
 */
class CaptureCache
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var array
     */
    private $chart;

    /**
     * @var integer
     */
    private $redemptionRate;

    /**
     * @var array
     */
    private $osRate;

    /**
     * @var string
     */
    private $averageTime;
    
    /**
     * @var integer
     */
    private $type;

    /**
     * @var \Tracker\UserBundle\Entity\User
     */
    private $user;
    
    /**
     * @var \Tracker\PlaceBundle\Entity\Place
     */
    private $place;

    /**
     * @var \DateTime
     */
    private $modified;

	/**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
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
     * Set chart
     *
     * @param array $chart
     * @return CaptureCache
     */
    public function setChart($chart)
    {
        $this->chart = $chart;

        return $this;
    }

    /**
     * Get chart
     *
     * @return array 
     */
    public function getChart()
    {
        return $this->chart;
    }

    /**
     * Set redemptionRate
     *
     * @param integer $redemptionRate
     * @return CaptureCache
     */
    public function setRedemptionRate($redemptionRate)
    {
        $this->redemptionRate = $redemptionRate;

        return $this;
    }

    /**
     * Get redemptionRate
     *
     * @return integer 
     */
    public function getRedemptionRate()
    {
        return $this->redemptionRate;
    }

    /**
     * Set osRate
     *
     * @param integer $osRate
     * @return CaptureCache
     */
    public function setOsRate($osRate)
    {
        $this->osRate = $osRate;

        return $this;
    }

    /**
     * Get osRate
     *
     * @return integer 
     */
    public function getOsRate()
    {
        return $this->osRate;
    }

    /**
     * Set averageTime
     *
     * @param string $averageTime
     * @return CaptureCache
     */
    public function setAverageTime($averageTime)
    {
        $this->averageTime = $averageTime;

        return $this;
    }

    /**
     * Get averageTime
     *
     * @return string 
     */
    public function getAverageTime()
    {
        return $this->averageTime;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return CaptureCache
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
     * @return CaptureCache
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
     * Set type
     *
     * @param integer $type
     * @return CaptureCache
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
     * Set place
     *
     * @param \Tracker\PlaceBundle\Entity\Place $place
     * @return CaptureCache
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
}
