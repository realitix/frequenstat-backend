<?php

namespace Tracker\CaptureBundle\Entity;


/**
 * Capture
 */
class Capture3d
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateCapture;

    
    /**
     * @var \Tracker\StationBundle\Entity\Station
     */
    private $station;
    
    /**
     * @var point
     */
    private $position;

    /**
     * @var \Tracker\PlaceBundle\Entity\Place
     */
    private $place;

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
     * Set dateCapture
     *
     * @param \DateTime $dateCapture
     * @return Capture
     */
    public function setDateCapture($dateCapture)
    {
        $this->dateCapture = $dateCapture;

        return $this;
    }

    /**
     * Get dateCapture
     *
     * @return \DateTime 
     */
    public function getDateCapture()
    {
        return $this->dateCapture;
    }

    /**
     * Set station
     *
     * @param \Tracker\StationBundle\Entity\Station $station
     * @return Capture3d
     */
    public function setStation(\Tracker\StationBundle\Entity\Station $station = null)
    {
        $this->station = $station;

        return $this;
    }

    /**
     * Get station
     *
     * @return \Tracker\StationBundle\Entity\Station 
     */
    public function getStation()
    {
        return $this->station;
    }

    /**
     * Set position
     *
     * @param point $position
     * @return Capture3d
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

    /**
     * Set place
     *
     * @param \Tracker\PlaceBundle\Entity\Place $place
     * @return Capture3d
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
