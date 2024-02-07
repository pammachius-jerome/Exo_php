<?php
session_start();



$_SESSION["nomUtilisateur"] = $_POST['nom'];
header("location:loginSuite.php");
?>