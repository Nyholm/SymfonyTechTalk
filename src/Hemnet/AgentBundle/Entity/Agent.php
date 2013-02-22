<?php

namespace Hemnet\AgentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agent
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Agent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

/**
     * @var string
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;


/**
     * @var string
     *
     * @ORM\Column(name="salery", type="integer")
     */
    private $salery;

public function __toString(){
		return $this->name;
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
     * Set name
     *
     * @param string $name
     * @return Agent
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
     * Set age
     *
     * @param integer $age
     * @return Agent
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set salery
     *
     * @param integer $salery
     * @return Agent
     */
    public function setSalery($salery)
    {
        $this->salery = $salery;
    
        return $this;
    }

    /**
     * Get salery
     *
     * @return integer 
     */
    public function getSalery()
    {
        return $this->salery;
    }
}