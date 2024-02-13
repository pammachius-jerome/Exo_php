<?php

class Vehicule
{
    // propriété
    /**
     * marque du véhilcule
     * @var string
     */
    public $marque;
    /**
     * modèle de voiture 
     * @var string
     */
    public $modele;

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

    public function demarrer()
    {
    }

    public function arreter()
    {
    }
    /**
     * 
     */
    public function faireLePlein()
    {
    }
};
