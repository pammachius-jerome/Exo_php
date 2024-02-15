<?php

class Moteur
{
    // propriété
    
    /**
     * le nombre actuel de litres dans le réservoir
     * @var float $volumeReservoir
     */
    private $volumeReservoir;
    /**
     * le nombre total de litres que le moteur a reçu au fil des pleins effectués
     * @var float $volumeTotal
     */
    private $volumeTotal;
    /**
     *  précise si le moteur tourne ou non
     * @var bool $demarre
     */
    private $demarre;
    /**
     * le volume nécessaire pour faire le trajet demander
     * @var float
     */
    private $volumeNecessaire;
    /**
     * volume de carburant nécessaire pour faire le plein
     * @var float
     */
    private $carburant;

    // méthodes
    
    // GETTERS accesseur
    /**
     * @return float
     */
    public function getVolumeReservoir()
    {
        return $this->volumeReservoir;
    }
    /**
     * @return float
     */
    public function getVolumeTotal()
    {
        return $this->volumeTotal;
    }
    /**
     * @return bool
     */
    public function getDemarre()
    {
        return $this->demarre;
    }

    /**
     * on démarre le moteur si c'est possible
     * @return bool
     */
    public function demarrer():bool
    {
        echo "je démarre le moteur";
        if ($this->volumeReservoir > 0.1) {
            $this->volumeReservoir -= 0.1;
            return true;
        } else {
            return false;
        }
    }
    /**
     * faire un trajet et consomme du carburant
     * @param float $volumeNecessaire le volume nécessaire pour faire le trajet demander
     * @return float $volumeReservoir après la consomation du trajet
     */
    public function utiliser($volumeNecessaire)
    {
        if ($this->volumeReservoir >= $volumeNecessaire) {
            echo "le moteur utilise $volumeNecessaire L. <br>";
            $this->volumeReservoir -= $volumeNecessaire;
            echo "Il reste $this->volumeReservoir L. <br>";
        }else {
            $volumeNecessaire = $this->volumeReservoir;
            echo "le moteur utilise $volumeNecessaire L. <br>";
            $this->volumeReservoir = 0;
            echo "Il reste $this->volumeReservoir L. <br>";
        }
        return $this->volumeReservoir;
    }
/**
 * effectuer le plein de carburant
 * @param float $carburant volume de carburant nécessaire pour faire le plein
 * @return null
 */
    public function faireLePlein($carburant)
    {
        echo "Il reste " . $this->volumeReservoir . " litre de carburant";
        $this->volumeReservoir += $carburant;
        $this->volumeTotal += $carburant;
        echo "Plein effectué avec " . $carburant . " litres. <br>";
    }

    public function arreter()
    {
        echo "J'arrete le moteur";
    }
}
