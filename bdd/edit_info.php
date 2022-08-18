<?php
session_start();
require_once("./connect_inc.php");
header("Location: ../controleur/mon_compte.php");

$pdo->query("UPDATE `utilisateur` SET `nom_utilisateur`='".htmlspecialchars(trim($_POST['nom_utilisateur']))."',`prenom_utilisateur`='".htmlspecialchars(trim($_POST['prenom_utilisateur']))."',`civilite_utilisateur`='".htmlspecialchars(trim($_POST['civilite_utilisateur']))."' WHERE `id_utilisateur` = ".htmlspecialchars(trim($_SESSION['id_utilisateur']))."");
$_SESSION["nom_utilisateur"] = htmlspecialchars(trim($_POST['nom_utilisateur']));
$_SESSION["prenom_utilisateur"] = htmlspecialchars(trim($_POST['prenom_utilisateur']));
$_SESSION["civilite_utilisateur"] = htmlspecialchars(trim($_POST['civilite_utilisateur']));
