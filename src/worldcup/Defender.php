<?php
namespace WorldCup;

class Defender extends Player {
    public $mark;

    public function steal(Ball $ball) {
        $effects = ["with fault", "without fault"];
        $effect = $effects[array_rand($effects)];
        echo "steals the ball $effect\n";
    }

    public function isMark() {
        return $this->mark;
    }

    public function setMark($mark) {
        $this->mark = $mark;
    }
}
