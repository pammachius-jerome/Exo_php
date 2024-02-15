<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Programmation orientée objet en PHP</title>
</head>

<body>
    <?php
    // on instanci Voiture
    require_once 'Voiture.php';
    
    //vérification du fonctionnement du constructeur
    $maVoiture = new Voiture("122-DC13", "bleue", 500, 100, 150, 4);
    //Vérification du setter d'assurance
    $maVoiture->setAssure(true);
    // var_dump($maVoiture);

    //vérification du fonctionnnement de la  méthode repeindre
    echo $maVoiture->repeindre("bleue");
    // echo $maVoiture->repeindre("gris");

    //vérification du fonctionnnement de la méthode mettreEssence
    echo $maVoiture->mettreEssence(145);

    // vérification du fonctionnnement de la méthode seDeplacer
    echo $maVoiture->seDeplacer(-100, 150);

    // vérification de la méthode magique __toString
    echo $maVoiture-> __toString();
    
    ?>
</body>

</html>