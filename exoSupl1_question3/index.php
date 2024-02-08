<?php
$tab = array(
    "php7@free.fr",
    "sacha8@gmail.com",
    "ariel13@wanadoo.fr",
    "webmestre@wanadoo.fr",
    "marcelduchamp9@gmail.com",
    "picasso69@gmail.com",
    "vangogh6.gmail.com",
    "matis63@free.fr",
    "degas45@wanadoo.fr"
);

$regex = '/(@.*)/';
$listeServeur = array();

// Parcourir les emails
foreach ($tab as $email) {
    preg_match($regex, $email, $matches);
    if (isset($matches[1])) {
        
        $listeServeur[] = $matches[1];
    }
};
var_dump($listeServeur);
echo "<br>";
$nombreMail = count($listeServeur);
$nombreOcurenceServeur = array_count_values($listeServeur);
// print_r(array_count_values($listeServeur));
// print_r($nombreMail);
// print_r($nombreOcurenceServeur);

for ($i = 0; $i < $nombreMail; $i++) {
    // $poucentage =  $nombreMail / $nombreOcurenceServeur;
    echo "Fournisseur d'accès : " . $listeServeur[$i] . " = " .$nombreOcurenceServeur[$i] / $nombreMail  . " % <br>";
}
?>


