<?php
include 'Moteur.php';
/**
 * véhicule à moteur qui hérite de la classe Vehicule
 */
abstract class VehiculeAMoteur extends Vehicule
{
    // propriété
    /**
     * @var string $moteur
     */
    private $moteur;

    // Méthode
    /**
     * constructeur de VehiculeAMoteur
     *
     * @param string $marque
     * @param string $modele
     */
    public function __construct(string $marque, string $modele)
    {
        parent::__construct($marque, $modele);
    }
    /**
     * méthode hérité de Moteur
     * 
     */
    public function demarrer():bool
    {
        return $this->moteur->demarrer();
    }
    /**
     * méthode hérité de Moteur
     *
     * 
     */
    public function arreter()
    {
        return $this->moteur->arreter();
    }

    public function faireLePlein(float $volumeComplement)
    {
       $this->arreter();

        
       $this->demarrer();
    }
};
