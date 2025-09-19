<?php
namespace WorldCup;

// Creamos la clase Forward, que hereda de Player.
// Representa a un delantero, con habilidades específicas para atacar y marcar goles.
class Forward extends Player {
    // Propiedad que indica si el delantero es un "killer", es decir, muy peligroso en el área
    public $killer;

    // Método que simula un regate
    public function drible() {
        echo "dribbling\n";
    }

    // Getter para saber si el delantero es un killer
    public function isKiller() {
        return $this->killer;
    }

    // Setter para asignar si el delantero es killer o no
    public function setKiller($killer) {
        $this->killer = $killer;
    }

    // Método que simula un disparo a portería
    // Elegimos un efecto al azar para darle variedad a los tiros
    public function kick(Ball $ball) {
        $effects = [
            "with spin",
            "too high",
            "off target",
            "straight to the keeper",
            "into the top corner",
            "with great power",
            "weak shot",
            "curled beautifully"
        ];

        $effect = $effects[array_rand($effects)];
        echo "kicking $effect\n";
    }
}
