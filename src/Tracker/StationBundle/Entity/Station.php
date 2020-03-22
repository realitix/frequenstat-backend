<?php

namespace Tracker\StationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Station
 */
class Station
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $mac;

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
     * Set mac
     *
     * @param string $mac
     * @return Station
     */
    public function setMac($mac)
    {
        $this->mac = $mac;

        return $this;
    }

    /**
     * Get mac
     *
     * @return string 
     */
    public function getMac()
    {
        return $this->mac;
    }
}
