<?php
namespace WorldCup;

// Creamos la clase Coach, que hereda de Person.
// Representa al entrenador del equipo, con habilidades y estilo propio.
class Coach extends Person {
    // Propiedad que guarda el estilo del entrenador (por ejemplo ofensivo o defensivo)
    private $style;

    // Método que simula que el entrenador entrena al equipo
    public function train() {
        echo "train\n";
    }

    // Getter del estilo del entrenador
    public function getStyle() {
        return $this->style;
    }

    // Setter del estilo del entrenador
    public function setStyle($style) {
        $this->style = $style; // corregido
    }
}
