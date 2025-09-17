<?php

namespace WorldCup;
class Person {

    public $name;

    public $age;



    public function __construct($name = '', $age = 0) {

        $this->name = $name;

        $this->age = $age;

    }

}