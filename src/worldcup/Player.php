<?php
namespace WorldCup;

class Player extends Person {
    public function run() {
        echo "running\n";
    }

    public function passBall() {
        echo "passing ball\n";
    }
}