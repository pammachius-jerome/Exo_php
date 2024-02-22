<?php
class Contact
{
    // Propriété
    /**
     * addresse mail
     *
     * @var string
     */
    private $mail;
    /**
     * Nom de l'expéditeur
     *
     * @var string
     */
    private $nom;
    /**
     * Prénom de l'expéditeur
     *
     * @var string
     */
    private $prenom;
    /**
     * Corp du mail à envoyer
     *
     * @var string
     */
    private $message;

    // header peut être à virer

    /**
     * header pour ajouter des option au message
     *
     * @var array
     */
    private $header;

    // Méthodes
    /**
     * constructeur de l'objet Contact
     *
     * @param string $nom
     * @param string $prenom
     * @param string $mail
     * @param string $message
     */
    public function __construct($nom, $prenom, $mail, $message)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->message = $message;
    }
    
    // getter
    /**
     * fonction getter mail - retourne le mail
     *
     * @return string
     */
    public function getMail(): string 
    {
        return $this->mail;
    }
    /**
     * fonction getter nom - retourne la valeur du nom
     *
     * @return string
     */
    public function getNom():string
    {
        return $this->nom;
    }
    /**
     * fonction getter prenon - retourne le prénom
     *
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    /**
     * fonction getter message - retourne le  contenue du message
     *
     * @return string
     */
    public function getMessage():string
    {
        return $this->message;
    }
    
    //setter
    /**
     * fonction setter de $mail 
     *
     * @param string $mail
     * @return void
     */
    public function setMail(string $mail)
    {
        $this->mail = $mail;
    }
    /**
     * fonction setter de $nom
     *
     * @param string $nom
     * @return void
     */
    public function setNom(string $nom)
    {
        $this->nom=$nom;
    }
    /**
     * fonction setter de $prenom
     *
     * @param string $prenom
     * @return void
     */
    public function setPrenoim(string $prenom)
    {
        $this->prenom=$prenom;
    }
    /**
     * fonction setter de $message
     *
     * @param string $message
     * @return void
     */
    public function setMessage(string $message)
    {
        $this->message=$message;
    }

 

    private function controle ()
    {
        if (!empty($_POST["nom"])){
            $this->nom = strip_tags($_POST["nom"]);
            var_dump($this->nom);
        }else{
            die("une erreur est survenue");
        }

    }
    
}
