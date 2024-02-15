<?php
class Scooter extends VehiculeAMoteur
{
    // Méthode

    public function rouler(float $volume) {
        if(!$this->demarrer()) {
            $this->demarrer();
        }
    }
}
?>