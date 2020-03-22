<?php

namespace Tracker\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     *
     * Used for access to api to enforce security, the security key must not change
     */
    private $securityKey;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $places;
    
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;
    
    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $phoneNumber1;

    /**
     * @var string
     */
    private $phoneNumber2;

    /**
     * @var string
     */
    private $address;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $modified;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->places = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->created = new \DateTime();
        $this->modified = new \DateTime();
        $this->securityKey = uniqid();
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        $this->modified = new \DateTime();
    }

    /**
     * Set Email
     * @return string
     */
    public function setEmail($email)
    {
        $this->email    = $email;
        $this->username = $email;
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
     * Set securityKey
     *
     * @param string $securityKey
     * @return User
     */
    public function setSecurityKey($securityKey)
    {
        $this->securityKey = $securityKey;

        return $this;
    }

    /**
     * Get securityKey
     *
     * @return string 
     */
    public function getSecurityKey()
    {
        return $this->securityKey;
    }

    /**
     * Add places
     *
     * @param \Tracker\PlaceBundle\Entity\Place $places
     * @return User
     */
    public function addPlace(\Tracker\PlaceBundle\Entity\Place $places)
    {
        $this->places[] = $places;

        return $this;
    }

    /**
     * Remove places
     *
     * @param \Tracker\PlaceBundle\Entity\Place $places
     */
    public function removePlace(\Tracker\PlaceBundle\Entity\Place $places)
    {
        $this->places->removeElement($places);
    }

    /**
     * Get places
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set phoneNumber1
     *
     * @param string $phoneNumber1
     * @return User
     */
    public function setPhoneNumber1($phoneNumber1)
    {
        $this->phoneNumber1 = $phoneNumber1;

        return $this;
    }

    /**
     * Get phoneNumber1
     *
     * @return string 
     */
    public function getPhoneNumber1()
    {
        return $this->phoneNumber1;
    }

    /**
     * Set phoneNumber2
     *
     * @param string $phoneNumber2
     * @return User
     */
    public function setPhoneNumber2($phoneNumber2)
    {
        $this->phoneNumber2 = $phoneNumber2;

        return $this;
    }

    /**
     * Get phoneNumber2
     *
     * @return string 
     */
    public function getPhoneNumber2()
    {
        return $this->phoneNumber2;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return User
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
     * @param \DateTime $modified
     * @return User
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
     * Set company
     *
     * @param string $company
     * @return User
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }
}
