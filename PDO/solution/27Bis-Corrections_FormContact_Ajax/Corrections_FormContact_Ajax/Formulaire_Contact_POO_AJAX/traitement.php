<?php

require_once "contact.class.php";

$erreurs = array();
$contact = new Contact();
$erreurs = $contact->control_form_fields($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["message"]);

if(empty($erreurs)){

    if($contact->verifier_doublon($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["message"])!== 0){

        echo json_encode(["msg_doublon" => "OK"]);

    }else{
        $contact->insertContact($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["message"]);

        echo json_encode(["msg" => "OK"]);
    }


}else{

    echo json_encode($erreurs);

}

?>
