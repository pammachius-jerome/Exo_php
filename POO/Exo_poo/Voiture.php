<?php

/**
 * 
 */
class Voiture
{
    // propriété
    /**
     * Immatriculation du véhicule
     *  @var string $immatriculation
     */
    private $immatriculation;
    /**
     * couleur du véhicule
     * @var string $couleur
     */
    private $couleur;
    /**
     * poids du véhicule
     * @var int $poids
     */
    private $poids;
    /**
     * puissance du véhicule
     * @var int $puissance
     */
    private $puissance;
    /**
     * Capacité maximum du réservoir
     * @var float $capaciteDuReservoir
     */
    private $capaciteDuReservoir;
    /**
     * Niveau d’essence actuel
     * @var float $niveauEssence
     */
    private $niveauEssence;
    /**
     *  Nombre de place du véhicule
     * @var int $nombreDePlace
     */
    private $nombreDePlace;
    /**
     * si le véhicule est assuré ou non
     * @var bool $assure
     */
    private $assure;
    /**
     *  Message au tableau de bord 
     * @var string $messageTableau
     */
    private $messageTableau;

    // Méthodes
    /**
     * constructeur de l'objet Vehicule
     * @param string $immatriculation
     * @param string $couleur
     * @param int $poids
     * @param int $puissance
     * @param float $capaciteDuReservoir
     * @param int $nombreDePlace
     */
    public function __construct($immatriculation, $couleur, $poids, $puissance, $capaciteDuReservoir, $nombreDePlace)
    {
        $this->immatriculation = $immatriculation;
        $this->couleur = $couleur;
        $this->poids = $poids;
        $this->puissance = $puissance;
        $this->capaciteDuReservoir = $capaciteDuReservoir;
        $this->nombreDePlace = $nombreDePlace;
        $this->niveauEssence = 5;
        $this->assure = false;
        $this->messageTableau = "Bienvenue";
    }
    //  GETTERS
    /**
     * fonctions getters immatriculation - retourne la valeur de immatriculation
     * @return string
     */
    public function getImmatriculation(): string
    {
        return $this->immatriculation;
    }
    /**
     * fonctions getters couleur - retourne la valeur de couleur
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }
    /**
     * fonctions getters poids - retourne la valeur de poids
     * @return int
     */
    public function getPoids(): int
    {
        return $this->poids;
    }
    /**
     * fonctions getters puissance - retourne la valeur de puissance
     * @return int
     */
    public function getPuissance(): int
    {
        return $this->puissance;
    }
    /**
     * fonctions getters capaciteDuReservoir - retourne la valeur de capaciteDuReservoir
     * @return float
     */
    public function getCapaciteDuReservoir(): float
    {
        return $this->capaciteDuReservoir;
    }
    /**
     * fonctions getters niveauEssence - retourne la valeur de niveauEssence
     * @return float
     */
    public function getNiveauEssence(): float
    {
        return $this->niveauEssence;
    }
    /**
     * fonctions getters nombreDePlace - retourne la valeur de nombreDePlace
     * @return int
     */
    public function getNombreDePlace(): int
    {
        return $this->nombreDePlace;
    }
    /**
     * fonctions getters assure - retourne la valeur de assure
     * @return bool
     */
    public function getAssure(): bool
    {
        return $this->assure;
    }
    /**
     * fonctions getters messageTableau - retourne la valeur de messageTableau
     * @return string
     */
    public function getMessageTableau(): string
    {
        return $this->messageTableau;
    }
    // SETTERS
    /**
     * modifie si la voiture est assuré ou non et retourne l'objet
     * @param bool $assurance assuré ou pas
     * @return Voiture
     */
    public function setAssure(bool $assurance): self
    {
        $this->assure = $assurance;
        if ($assurance == true) {
            echo "Ce véhicule est assuré. <br>";
        } else {
            echo "Ce véhicule n'est pas assuré. <br>";
        }
        return $this;
    }

    // methode de service
    /**
     * change la couleur de la voiture - retourne
     * @param string $nouvelleCouleur nouvelle couleur de la voiture
     * @param string $couleur couleur actuel de la voiture
     * @return string
     */
    public function repeindre(string $nouvelleCouleur)
    {
        if (isset($this->couleur)) {

            if ($nouvelleCouleur == $this->couleur) {
                return "mercie pour se rafraichissement, couleur identique.<br>";
            } else {
                $this->couleur = $nouvelleCouleur;
                return "Merci pour ce changement de couleur<br>";
            }
        } else {
            return "erreur la voiture n'a pas de couleur<br>";
        }
    }
    /**
     * ajoute de l'essence à la voiture - retourne le niveau de carburant mis à jour
     * @param float $ajoutEssence quantité d'essence que l'on tente d'ajouter
     * @return string $niveauEssence niveau de carburant de la voiture mis à jour
     */
    public function mettreEssence(float $ajoutEssence)
    {
        if ($ajoutEssence > 0) {
            if ($this->capaciteDuReservoir >= ($this->niveauEssence + $ajoutEssence)) {
                $this->niveauEssence += $ajoutEssence;
                return "vous avez ajoutez " . $ajoutEssence . " litre d'essence. Le réservoir contient " . $this->niveauEssence . " litre. <br>";
            }else {
                return "Vous t'entez de mettre trop d'essence<br>";
            }
        }else {
            return "Il y a une erreur. Veillez ajouter une valeur supérieur à zéro d'essence!<br>";
        }
    }
    /**
     * trajet: calcule la consommation si c'est possible retourne un message avec la consomation
     * @param float $distanceParcourue distance que l'on souhaite parcourir en km
     * @param float $vitesse vitesse moyenne du déplacement
     * @var int consomation en carbutrant pour 100km
     * @return string indique par un message la consomation du trajet
     */
    public function seDeplacer(float $distanceParcourue, float $vitesse) 
    {
        if ($distanceParcourue > 0 && $vitesse > 0) {
            if ($vitesse < 50) {
                $consomation = 10;
            }else {
                if ($vitesse < 90) {
                    $consomation = 5;
                }else {
                    if ($vitesse < 130) {
                        $consomation = 8;
                    }else {
                        $consomation = 12;
                    }
                }
            }
        }else {
            return "il y a une erreur. Veillez entrer une vitesse et une distance superieur à zéro!<br>";
        }
        if ($this->niveauEssence >= $consomation * $distanceParcourue) {
            $this->niveauEssence -= $consomation * $distanceParcourue;
            return "Le trajet à consomer " . $consomation * $distanceParcourue . " litre d'essence. Il reste " . $this->niveauEssence . " litre dans le réservoire.<br>";
        }else {
            return "Erreur, il n'y a pas assez d'essence pour le trajet!<br>";
        }
    }
    public function __toString()
    {
        $message = "<br>La voiture a pour plaque d'immatriculation : %s . Sa puissance est de %d cheaveaux et elle est %s";
        return sprintf($message, $this->immatriculation, $this->puissance, $this->couleur);
    }

}
