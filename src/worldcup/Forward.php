<?php
namespace WorldCup;

class Forward extends Player {
    public $killer;

    public function drible() {
        echo "dribbling\n";
    }

    public function isKiller() {
        return $this->killer;
    }

    public function setKiller($killer) {
        $this->killer = $killer;
    }

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