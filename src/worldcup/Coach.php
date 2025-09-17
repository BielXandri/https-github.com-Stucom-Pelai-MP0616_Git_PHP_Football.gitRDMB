<?php
namespace WorldCup;

class Coach extends Person {
    private $style;

    public function train() {
        echo "train\n";
    }

    public function getStyle() {
        return $this->style;
    }

    public function setStyle($style) {
        $this->style = $style;
    }
}