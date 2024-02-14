<?php
class Moteur
{
    // propriété
    /**
     * le nombre actuel de litres dans le réservoir
     * @var float
     */
    public $volumeReservoir;
    /**
     * le nombre total de litres que le moteur a reçu au fil des pleins effectués
     * @var float
     */
    public $volumeTotal;
    /**
     *  précise si le moteur tourne ou non
     * @var bool
     */
    public $demarre;
    /**
     * le volume nécessaire pour faire le trajet demander
     * @var float
     */
    public $volumeNecessaire;
    /**
     * volume de carburant nécessaire pour faire le plein
     * @var float
     */
    public $carburant;

    // méthodes

    public function volumeReservoir()
    {
        return $this->volumeReservoir;
    }

    public function volumeTotal()
    {
        return $this->volumeTotal;
    }

    public function demarre()
    {
        return $this->demarre;
    }
    /**
     * on démarre le moteur si c'est possible
     * @return bool
     */
    public function demarrer($volumeReservoir)
    {
        echo "je démarre le moteur";
        if ($volumeReservoir > 0) {
            $volumeReservoir -= 0.1;
            return true;
        } else {
            return false;
        }
    }
    /**
     * faire un trajet et consomme du carburant
     * @return float
     */
    public function utiliser($volumeNecessaire, $volumeReservoir)
    {
        if ($volumeReservoir >= $volumeNecessaire) {
            echo "le moteur utilise $volumeNecessaire L. <br>";
            $volumeReservoir -= $volumeNecessaire;
            echo "Il reste $volumeReservoir L. <br>";
        }else {
            $volumeNecessaire = $volumeReservoir;
            echo "le moteur utilise $volumeNecessaire L. <br>";
            $volumeReservoir = 0;
            echo "Il reste $volumeReservoir L. <br>";
        }
        return $volumeReservoir;
    }
/**
 * effectuer le plein de carburant
 * 
 */
    public function faireLePlein($carburant, $volumeReservoir, $volumeTotal)
    {
        echo "Il reste  litre de carburant";
        $volumeReservoir += $carburant;
        $volumeTotal += $carburant;
        echo "Plein effectué avec " . $carburant . " litres. <br>";
    }

    public function arreter()
    {
        echo "J'arrete le moteur";
    }
}
