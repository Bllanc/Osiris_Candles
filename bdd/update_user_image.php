<?php
session_start();
header('Content-Type: application/json'); // je déclare le type de contenu en json ( pour le retour )
require_once "connect_inc.php";

$new_img = $_POST["image"]; // je recup mes datas

$pdo->query("UPDATE `utilisateur` SET `user_img`='".$new_img."' WHERE id_utilisateur = '".$_SESSION["id_utilisateur"]."'"); // update de l'image utilisateur dans la bdd

$_SESSION['user_img'] = $new_img; // update de l'image utilisateur dans la session

$Output["new_img"] = $new_img; // j'intégre l'url de l'img dans mon retour

echo json_encode($Output, JSON_FORCE_OBJECT); // j'ecris mon retour en forçant le json

?>