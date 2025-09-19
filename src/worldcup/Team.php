<?php

namespace WorldCup;

// Clase Team: representa un equipo con nombre, entrenador y jugadores
class Team {
    public $name;
    public $coach;
    public $players; // array de objetos Player

    // Constructor: inicializa el equipo con un nombre
    public function __construct($name) {
        $this->name = $name;
    }

    // Método que simula que el equipo juega
    public function play() {
        echo "playing\n";
    }

    // Método que simula que el equipo ataca
    public function attack() {
        echo "attacking\n";
    }

    // Getter del nombre del equipo
    public function getName() {
        return $this->name;
    }

    // Setter del nombre del equipo
    public function setName($name) {
        $this->name = $name;
    }

    // Getter del entrenador
    public function getCoach() {
        return $this->coach;
    }

    // Setter del entrenador
    public function setCoach($coach) {
        $this->coach = $coach;
    }

    // Getter de los jugadores
    public function getPlayers() {
        return $this->players;
    }

    // Setter de los jugadores
    public function setPlayers($players) {
        $this->players = $players;
    }
}
