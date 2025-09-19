<?php
namespace WorldCup;

// Clase Player, que hereda de Person
// Representa a un jugador genérico con habilidades básicas
class Player extends Person {

    // Método que simula que el jugador corre
    public function run() {
        echo "running\n";
    }

    // Método que simula que el jugador pasa la pelota
    public function passBall() {
        echo "passing ball\n";
    }
}
