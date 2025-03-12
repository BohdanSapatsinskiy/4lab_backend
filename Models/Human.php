<?php
namespace Models;

class Human
{
    private $name;
    private $height;
    private $weight;
    private $age;

    public function __construct($name,$height, $weight, $age)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        $this->age = $age;
    }


    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getHeight()
    {
        return $this->height;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }


    public function getWeight()
    {
        return $this->weight;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }


    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
}
