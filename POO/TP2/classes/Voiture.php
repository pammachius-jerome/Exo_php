<?php
class Voiture extends VehiculeAMoteur
{
    // propriété

    // Méthode
    public function rouler(float $volume) { 
        if ( ! $this->demarrer()) {
         $this->demarrer();
         }
        $carburant = $this->utiliser($volume);
       
        }
        

}
?>