<?php

namespace Proxies\__CG__\Tracker\CaptureBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CaptureCache extends \Tracker\CaptureBundle\Entity\CaptureCache implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'id', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'chart', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'redemptionRate', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'osRate', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'averageTime', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'type', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'user', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'place', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'modified');
        }

        return array('__isInitialized__', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'id', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'chart', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'redemptionRate', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'osRate', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'averageTime', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'type', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'user', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'place', '' . "\0" . 'Tracker\\CaptureBundle\\Entity\\CaptureCache' . "\0" . 'modified');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CaptureCache $proxy) {
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
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', array());

        return parent::prePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', array());

        return parent::preUpdate();
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
    public function setChart($chart)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChart', array($chart));

        return parent::setChart($chart);
    }

    /**
     * {@inheritDoc}
     */
    public function getChart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChart', array());

        return parent::getChart();
    }

    /**
     * {@inheritDoc}
     */
    public function setRedemptionRate($redemptionRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRedemptionRate', array($redemptionRate));

        return parent::setRedemptionRate($redemptionRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getRedemptionRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRedemptionRate', array());

        return parent::getRedemptionRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setOsRate($osRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOsRate', array($osRate));

        return parent::setOsRate($osRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getOsRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOsRate', array());

        return parent::getOsRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setAverageTime($averageTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAverageTime', array($averageTime));

        return parent::setAverageTime($averageTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getAverageTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAverageTime', array());

        return parent::getAverageTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setModified($modified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModified', array($modified));

        return parent::setModified($modified);
    }

    /**
     * {@inheritDoc}
     */
    public function getModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModified', array());

        return parent::getModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Tracker\UserBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
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