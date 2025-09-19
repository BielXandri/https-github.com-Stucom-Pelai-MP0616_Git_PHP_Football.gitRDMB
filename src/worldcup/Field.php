<?php

namespace WorldCup;

// Creamos la clase Field, que representa el campo de fútbol donde se juega.
// Por ahora controlamos el tamaño y podemos simular encender las luces.
class Field {

    // Constructor que recibe el tamaño del campo
    public function __construct($size) {
        $this->size = $size;
    }

    // Getter para obtener el tamaño del campo
    public function getSize() {
        return $this->size;
    }

    // Setter para cambiar el tamaño del campo
    public function setSize($size) {
        $this->size = $size;
    }

    // Método que simula encender o apagar las luces del campo
    public function light() {
        echo "switching the lights\n";
    }
}
