<?php

namespace Tracker\OuiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organization
 */
class Organization
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
     * @var string
     */
    private $mac;

    /**
     * @var \Tracker\OuiBundle\Entity\Os
     */
    private $os;

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
     * @return Organization
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
     * Set mac
     *
     * @param string $mac
     * @return Organization
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

    /**
     * Set os
     *
     * @param \Tracker\OuiBundle\Entity\Os $os
     * @return Organization
     */
    public function setOs(\Tracker\OuiBundle\Entity\Os $os = null)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return \Tracker\OuiBundle\Entity\Os 
     */
    public function getOs()
    {
        return $this->os;
    }
}
