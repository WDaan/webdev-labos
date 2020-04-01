<?php

trait Pet
{

    private $name, $legs;

    public function getSort()
    {
        return get_class($this);
    }

    public function getType()
    {
        return "Pet";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLegs()
    {
        return $this->legs;
    }
}

class Dog
{

    use Pet;

    public function __construct($name = "Good Boy")
    {
        $this->name = $name;
        $this->legs = 4;
    }

    public function getSound()
    {
        return "Woof!";
    }
}


class Cat
{
    use Pet;

    public function __construct($name = "Unknown")
    {
        $this->name = $name;
        $this->legs = 4;
    }

    public function getSound()
    {
        return "Meow!";
    }
}
