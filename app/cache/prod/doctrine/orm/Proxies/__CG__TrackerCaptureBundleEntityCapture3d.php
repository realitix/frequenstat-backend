<?php

namespace Proxies\__CG__\Tracker\CaptureBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Capture3d extends \Tracker\CaptureBundle\Entity\Capture3d implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\Capture3d' . "\0" . 'id', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\Capture3d' . "\0" . 'dateCapture', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\Capture3d' . "\0" . 'station', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\Capture3d' . "\0" . 'position', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\Capture3d' . "\0" . 'place');
        }

        return array('__isInitialized__', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\Capture3d' . "\0" . 'id', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\Capture3d' . "\0" . 'dateCapture', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\Capture3d' . "\0" . 'station', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\Capture3d' . "\0" . 'position', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\Capture3d' . "\0" . 'place');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Capture3d $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCapture($dateCapture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCapture', array($dateCapture));

        return parent::setDateCapture($dateCapture);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCapture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCapture', array());

        return parent::getDateCapture();
    }

    /**
     * {@inheritDoc}
     */
    public function setStation(\Tracker\StationBundle\Entity\Station $station = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStation', array($station));

        return parent::setStation($station);
    }

    /**
     * {@inheritDoc}
     */
    public function getStation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStation', array());

        return parent::getStation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', array($position));

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', array());

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlace(\Tracker\PlaceBundle\Entity\Place $place = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlace', array($place));

        return parent::setPlace($place);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlace', array());

        return parent::getPlace();
    }

}
