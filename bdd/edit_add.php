<?php
session_start();

header("Location: ../controleur/mon_compte.php");

if (preg_match ( " #^[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}?$# " , $_POST['tel_utilisateur'] ) == false) {
    exit;
}

require_once("./connect_inc.php");

$pdo->query("UPDATE `users` SET `nom_utilisateur`='".htmlspecialchars(trim($_POST['nom_utilisateur']))."',`prenom_utilisateur`='".htmlspecialchars(trim($_POST['prenom_utilisateur']))."',`civilite_utilisateur`='".htmlspecialchars(trim($_POST['civilite_utilisateur']))."',`tel_utilisateur`='".htmlspecialchars(trim($_POST['tel_utilisateur']))."',`adresse_utilisateur`='".htmlspecialchars(trim($_POST['adresse_utilisateur']))."',`code_postal`='".htmlspecialchars(trim($_POST['code_postal']))."',`ville`='".htmlspecialchars(trim($_POST['ville']))."',`pays`='".htmlspecialchars(trim($_POST['pays']))."' WHERE `id_utilisateur` = ".htmlspecialchars(trim($_SESSION['id_utilisateur']))."");
$_SESSION["nom_utilisateur"] = htmlspecialchars(trim($_POST['nom_utilisateur']));
$_SESSION["prenom_utilisateur"] = htmlspecialchars(trim($_POST['prenom_utilisateur']));
$_SESSION["civilite_utilisateur"] = htmlspecialchars(trim($_POST['civilite_utilisateur']));
$_SESSION["tel_utilisateur"] = htmlspecialchars(trim($_POST['tel_utilisateur']));
$_SESSION["adresse_utilisateur"] = htmlspecialchars(trim($_POST['adresse_utilisateur']));
$_SESSION["code_postal"] = htmlspecialchars(trim($_POST['code_postal']));
$_SESSION["ville"] = htmlspecialchars(trim($_POST['ville']));
$_SESSION["pays"] = htmlspecialchars(trim($_POST['pays']));

?>