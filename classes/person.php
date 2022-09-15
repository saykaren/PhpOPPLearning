<?php

class Person {
    public $name;
    public $eyeColor;
    public $age;

    public function __construct(
        $name,
        $eyeColor,
        $age
    )
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __destruct()
    {
        echo "\n Goodbye {$this->name}";
    }
}

$person1 = new Person("Karen", "Blue", 36);
// $person1->setName("Daniel");
echo $person1->name;
echo $person1->age;