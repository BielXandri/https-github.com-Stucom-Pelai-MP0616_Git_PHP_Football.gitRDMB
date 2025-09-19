<?php

namespace WorldCup;

// Creamos la clase Goalkeeper, que hereda de Player.
// Representa al portero del equipo, con habilidades propias para bloquear balones.
class Goalkeeper extends Player {
    // Propiedad que indica si el portero lleva guantes (globes)
    public $globes;

    // Getter para saber si el portero tiene guantes
    public function isGlobes() {
        return $this->globes;
    }

    // Setter para asignar si el portero lleva guantes o no
    public function setGlobes($globes) {
        $this->globes = $globes;
    }

    // Método que simula un bloqueo del portero
    // Elegimos un efecto al azar para que tenga éxito o no
    public function block(Ball $ball) {
        $effects = ["with success", "without success"];
        $effect = $effects[array_rand($effects)];
        echo "catching $effect\n";
    }
}
