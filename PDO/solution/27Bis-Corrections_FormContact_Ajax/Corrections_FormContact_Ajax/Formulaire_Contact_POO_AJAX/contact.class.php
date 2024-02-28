<?php
include_once "database.class.php";

class Contact
{

    private $nom;
    private $prenom;
    private $email;
    private $message;


    // Méthode statique qui supprime les espaces en début et fin de chaîne, les antislashes, convertit les
    // caractères spéciaux en entités HTML 
    public static function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }

    // Fonction qui vérifie qu'un enregistrement n'est pas déjà en Base. Si le retour est 1 on redirige vers index.php
    // sinon on insert en BDD.
    public function verifier_doublon($nom, $prenom, $email, $message)
    {

        $this->nom      = self::test_input($nom);
        $this->prenom   = self::test_input($prenom);
        $this->email    = self::test_input($email);
        $this->message  = self::test_input($message);

        $pdo = Database::connect();
        $req = "SELECT * FROM contact WHERE nom= :nom AND prenom=:prenom AND email=:email AND message=:message";
        $reponse = $pdo->prepare($req);
        $reponse->bindValue(":nom",  $this->nom, PDO::PARAM_STR);
        $reponse->bindValue(":prenom", $this->prenom, PDO::PARAM_STR);
        $reponse->bindValue(":email", $this->email, PDO::PARAM_STR);
        $reponse->bindValue(":message", $this->message, PDO::PARAM_STR);
        $reponse->execute();
        Database::disconnect();

        return $reponse->rowCount();
    }

    public function insertContact($nom, $prenom, $email, $message)
    {

        $this->nom      = self::test_input($nom);
        $this->prenom   = self::test_input($prenom);
        $this->email    = self::test_input($email);
        $this->message  = self::test_input($message);

        $pdo = Database::connect();
        $sql = "INSERT INTO contact(nom, prenom, email, message) VALUES (:nom, :prenom, :email, :message)";
        $reponse = $pdo->prepare($sql);
        $reponse->bindParam(':nom', $this->nom);
        $reponse->bindParam(':prenom', $this->prenom);
        $reponse->bindParam(':email', $this->email);
        $reponse->bindParam(':message', $this->message);

        $reponse->execute();
        Database::disconnect();
    }

    // Méthode de contrôle des champs de saisie du formulaire
    function control_form_fields($nom, $prenom, $email, $message)
    {

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->message = $message;

        $reg_mail = "/(^[a-zA-Z0-9_.]+[@]{1}[a-z0-9]+[.][a-z]{2,6}$)/";
        $erreurs = array();

        if ((!empty($this->nom)) && (!empty($this->prenom)) && (!empty($this->email)) && (!empty($this->message))) {

            if (!preg_match("#^[A-Za-z-']{2,}$#", $this->nom)) {

                $erreurs["nom"] = "Veuillez saisir un nom valide !";
            }
            if (!preg_match("#^[A-Za-z-']{2,}$#", $this->prenom)) {

                $erreurs["prenom"] = "Veuillez saisir un prénom valide !";
            }
            if (!preg_match($reg_mail, $this->email)) {

                $erreurs["email"] = "Veuillez saisir un mail valide !";
            }
            if (!preg_match("#^[A-Za-z-']{2,}$#", $this->message)) {

                $erreurs["message"] = "Veuillez saisir un message !";
            }
        } else {
            if (empty($this->nom)) {

                $erreurs["nom"] = "Veuillez saisir un nom !";
            } else {

                if (!preg_match("#^[A-Za-z-']{2,}$#", $this->nom)) {

                    $erreurs["nom"] = "Veuillez saisir un nom valide !";
                }
            }

            if (empty($this->prenom)) {

                $erreurs["prenom"] = "Veuillez saisir un prénom !";
            } else {

                if (!preg_match("#^[A-Za-z-']{2,}$#", $this->prenom)) {

                    $erreurs["prenom"] = "Veuillez saisir un prénom valide !";
                }
            }

            if (empty($this->email)) {

                $erreurs["email"] = "Veuillez saisir un mail !";
            } else {

                if (!preg_match($reg_mail, $this->email)) {

                    $erreurs["email"] = "Veuillez saisir un mail valide !";
                }
            }

            if (empty($this->message)) {

                $erreurs["message"] = "Veuillez saisir un message !";
            }
        }

        return $erreurs;
    }
}
