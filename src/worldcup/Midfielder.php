<?php

namespace WorldCup;

// Creamos la clase Midfielder, que hereda de Player
// Representa al centrocampista, que organiza el juego y conecta defensa y ataque
class Midfielder extends Player {
    // Propiedad que indica la "visión" del jugador: su capacidad para organizar jugadas
    private $vision;

    // Getter para consultar la visión del centrocampista
    public function isVision() {
        return $this->vision;
    }

    // Setter para asignar la visión del centrocampista
    public function setVision($vision) {
        $this->vision = $vision;
    }

    // Método que simula que el centrocampista organiza el juego
    public function organize() {
        // Imprimimos un mensaje para mostrar la acción
        echo "organizing\n";
    }
}
