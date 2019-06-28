<?php

abstract class Character {
    protected $lifePoint = 100;
    public $pseudo;
    public $atk = 15;
    protected $alive = true;

    public function __construct($pseudo) {
        $this->pseudo = $pseudo;
    }
    
    public function isAlive() {
        if ($this->lifePoint <= 0) {
            $this->lifePoint = 0;
            $this->alive = false;
            return false;
        } else {
            return true;
        }
    }
}