<?php

namespace Tracker\CaptureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Capture
 */
class Capture
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
     * @var smallint
     */
    private $power;
    
    /**
     * @var \Tracker\PlaceBundle\Entity\Box
     */
    private $box;
    
    /**
     * @var \Tracker\StationBundle\Entity\Station
     */
    private $station;

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
     * Set power
     *
     * @param integer $power
     * @return Capture
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return integer 
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set box
     *
     * @param \Tracker\PlaceBundle\Entity\Box $box
     * @return Capture
     */
    public function setBox(\Tracker\PlaceBundle\Entity\Box $box = null)
    {
        $this->box = $box;

        return $this;
    }

    /**
     * Get box
     *
     * @return \Tracker\PlaceBundle\Entity\Box 
     */
    public function getBox()
    {
        return $this->box;
    }


    /**
     * Set station
     *
     * @param \Tracker\StationBundle\Entity\Station $station
     * @return Capture
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
}
