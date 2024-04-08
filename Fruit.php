<?php

abstract class Fruit {
    private $name;

    public $color;
    public $amount;

    protected $art;

    function __construct($name)
    {
        //$this->name = $name;

        //$apple = mew Apple("Name");
    }

    /**
     * Get the value of name
     */ 
    function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    function setName($name)
    {
        $this->name = $name;

        //$apple = new Apple();
        //$apple->setName("Name");

        return $this;
    }

    /**
     * Get the value of color
     */ 
    function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    abstract function message();

    function __destruct()
    {
        //echo "I am a ". $this->name."\n\r";
    }
}