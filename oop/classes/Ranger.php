<?php 

class Ranger extends Character {
    private $quiver = 3;
    private $disengage = false;

    public function action($target) {
        if($this->quiver >= 1) {
            $dice = rand(1, 6);
        
            if($dice == 6 && $this->quiver >= 2 && $this->disengage == false) {
                $this->disengage = true;
                $status = "<strong>$this->pseudo</strong> bondit en arrière et prépare un coup. Il n'inflige pas de dégâts ce tour.";
                $target->isAlive();
            } elseif($this->disengage == true) {
                $atk = $this->atk*2;
                $this->quiver -= 2;
                $target->setHP($atk);
                $status = "<strong>$this->pseudo</strong> lance la double attaque du dragon écarlate et de l'hirondelle moldave du soleil pourpre. Coup dur pour <strong>$target->pseudo</strong> qui se retrouve à <strong>$target->lifePoint</strong> points de vie. Carquois : <strong>$this->quiver</strong> flèches";
                $target->isAlive();
                $this->disengage = false;
            } else {
                $atk = $this->atk;
                $target->setHP($atk);
                $this->quiver -= 1;
                $status = "<strong>$this->pseudo</strong> attaque <strong>$target->pseudo</strong> qui a <strong>$target->lifePoint</strong> points de vie. Carquois : <strong>$this->quiver</strong> flèches";
                $target->isAlive();
            }
        } else {
            $atk = $this->atk*0.6;
            $target->setHP($atk);
            $status = "<strong>$this->pseudo</strong> attaque <strong>$target->pseudo</strong> à la dague à qui il reste <strong>$target->lifePoint</strong>";
            $target->isAlive();
        }
        
        return $status;
        
    }

    public function setHP($damage) {
        $this->lifePoint -= $damage;
        return;
    }
}