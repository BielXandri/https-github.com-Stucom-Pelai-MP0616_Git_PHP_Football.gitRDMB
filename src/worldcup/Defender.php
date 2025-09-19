<?php
namespace WorldCup;

// Creamos la clase Defender, que hereda de Player.
// Representa a un defensa, con habilidades para robar balones y marcar rivales.
class Defender extends Player {
    // Propiedad que indica a quién está marcando el defensa
    public $mark;

    // Método que simula que el defensa intenta robar el balón
    public function steal(Ball $ball) {
        $effects = ["with fault", "without fault"];
        $effect = $effects[array_rand($effects)];
        echo "steals the ball $effect\n";
    }

    // Getter para saber a quién está marcando el defensa
    public function isMark() {
        return $this->mark;
    }

    // Setter para asignar a quién debe marcar el defensa
    public function setMark($mark) {
        $this->mark = $mark; 
    }
}
