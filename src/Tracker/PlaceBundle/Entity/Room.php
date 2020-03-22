<?php

namespace Tracker\PlaceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 */
class Room
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
    private $description;
    
    /**
     * @var \Tracker\PlaceBundle\Entity\Place
     */
    private $place;
    
    /**
     * @var polygon
     */
    private $area;


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
     * @return Room
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
     * Set description
     *
     * @param string $description
     * @return Room
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
     * Set place
     *
     * @param \Tracker\PlaceBundle\Entity\Place $place
     * @return Room
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
     * Set area
     *
     * @param polygon $area
     * @return Room
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return polygon 
     */
    public function getArea()
    {
        return $this->area;
    }
    
    
    /**
     * Set object
     *
     * @param polygon $object
     * @return Place
     */
    public function setObject($object)
    {
        if( is_string($object) )
            $object = $this->strToPolygon($object);
            
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return polygon 
     */
    public function getObject()
    {
        return $this->object;
    }
    
    private function strToPolygon($str)
	{
		$strPoints = explode(',', trim($str));
		$points = array();
		foreach($strPoints as $sp) {
			$t = explode(' ', trim($sp));
			$points[] = new \CrEOF\Spatial\PHP\Types\Geometry\Point($t[0], $t[1]);
		}
		$line = new \CrEOF\Spatial\PHP\Types\Geometry\LineString($points);
		return new \CrEOF\Spatial\PHP\Types\Geometry\Polygon(array($line));
	}
    /**
     * @var array
     */
    private $scene;


    /**
     * Set scene
     *
     * @param array $scene
     * @return Room
     */
    public function setScene($scene)
    {
        $this->scene = $scene;

        return $this;
    }

    /**
     * Get scene
     *
     * @return array 
     */
    public function getScene()
    {
        return $this->scene;
    }
}
