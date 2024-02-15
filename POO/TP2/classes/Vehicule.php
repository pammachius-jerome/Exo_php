<?php

abstract class Vehicule
{
    // propriété
    /**
     * marque du véhilcule
     * @var string $marque
     */
    private $marque;
    /**
     * modèle de voiture 
     * @var string
     */
    private $modele;



    // méthodes
    /**
     * constructeur de l'objet Vehicule
     * @param string $marque marque du véhicule
     * @param string $modele modèle du véhicule
     */
    public function __construct(string $marque, string $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
    }
    /**
     * @return bool opération réussi ou non
     */
    abstract public function demarrer();

    /**
     * @return null
     */
    abstract public function arreter();

    /**
     * @param float 
     * @return null
     */
    abstract public function faireLePlein(float $volumeComplement);
};

