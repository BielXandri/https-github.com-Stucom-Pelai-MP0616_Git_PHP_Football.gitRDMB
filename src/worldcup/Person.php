<?php

namespace WorldCup;

// Clase base Person, que representa a cualquier persona del juego
// como jugadores o entrenadores, con nombre y edad
class Person {

    // Propiedad para guardar el nombre de la persona
    public $name;

    // Propiedad para guardar la edad de la persona
    public $age;

    // Constructor que permite crear una persona con nombre y edad
    // Si no se pasan valores, por defecto el nombre es vacío y la edad es 0
    public function __construct($name = '', $age = 0) {
        $this->name = $name;
        $this->age = $age;
    }
}
