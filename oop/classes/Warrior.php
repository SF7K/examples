<?php

class Warrior extends Character {

    public function __construct($pseudo) {
        $this->pseudo = $pseudo;
    }
   
    public function action($target) {
        $rand = rand(1, 10);
        $damage = $this->atk + $rand;
        $target->setHP($damage);
        $target->isAlive();
        $status = "<strong>$this->pseudo</strong> attaque <strong>$target->pseudo</strong> qui a <strong>$target->lifePoint</strong> points de vie!";
        return $status;
    }

    public function setHP($damage) {
        $this->lifePoint -= $damage;
        return;
    }
}