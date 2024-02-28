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

    // Méthodes

    /**
     * constructeur de l'objet Contact
     *
     * @param string $nom
     * @param string $prenom
     * @param string $mail
     * @param string $message
     */
    public function __construct($nom = 0, $prenom = 0, $mail = 0, $message = 0)
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
    public function getNom(): string
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
    public function getMessage(): string
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
        $this->nom = $nom;
    }
    /**
     * fonction setter de $prenom
     *
     * @param string $prenom
     * @return void
     */
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }
    /**
     * fonction setter de $message
     *
     * @param string $message
     * @return void
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }


    /**
     * fonction de contr$ole de validation du formulaire - protection contre injection SQL
     *
     * @return void
     */
    public function controle()
    {
        if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["mail"]) && !empty($_POST["message"])) {
            // on "nettoie" les valeur envoyer par le formulaire
            $this->nom = strip_tags($_POST["nom"]);
            $this->prenom = strip_tags(($_POST["prenom"]));
            $this->mail = strip_tags($_POST["mail"]);
            $this->message = strip_tags($_POST["message"]);
            // on lance la connection à la BDD
            $this->connection();
        } else {
            die("une erreur est survenue");
        }
    }

    /**
     * fonction qui prépare et connect à la BDD exercice1
     *
     * @return void
     */
    public function connection()
    {
        // constante d'environnement
        define("DBHOST", "localhost");
        define("DBUSER", "root");
        define("DBPASS", "");
        define("DBNAME", "exercice1");

        // DSN de connection
        $dsn = "mysql:dbname=" . DBNAME . "; host=" . DBHOST;

        // On se connecte à la base de donnée
        try {
            // on instancie le PDO
            $db = new PDO($dsn, DBUSER, DBPASS);
            // on s'assure d'envoyer les donnée en utf8
            $db->exec("SET NAMES utf8");
            $this->ajout($db);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }


    /**
     * fonction qui ajoute un enregistrement (tuple)
     * @param string $bd instance de connection
     * @return void
     */
    public function ajout($db)
    {
        $sql = "INSERT INTO contacts(nom, prenom, mail, message) VALUES (:nom, :prenom, :mail, :message)";
        //on prépare la requête
        $requete = $db->prepare($sql);

        // on injecte les valeur
        $requete->bindValue(":nom", $this->nom, PDO::PARAM_STR);
        $requete->bindValue(":prenom", $this->prenom, PDO::PARAM_STR);
        $requete->bindValue(":mail", $this->mail, PDO::PARAM_STR);
        $requete->bindValue(":message", $this->message, PDO::PARAM_STR);

        // on execute la requête
        $requete->execute();

    }
}
// $utilisateur = new Contact();

// $utilisateur->controle();
