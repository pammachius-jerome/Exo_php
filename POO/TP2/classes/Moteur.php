<?php
class Moteur
{
    // propriété
    
    /**
     * le nombre actuel de litres dans le réservoir
     * @var float
     */
    private $volumeReservoir;
    /**
     * le nombre total de litres que le moteur a reçu au fil des pleins effectués
     * @var float
     */
    private $volumeTotal;
    /**
     *  précise si le moteur tourne ou non
     * @var bool
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
     * @param float $volumeNecessaire le volume nécessaire pour faire le trajet demander
     * @param float $volumeReservoir le nombre actuel de litres dans le réservoir
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
