<?php
// require_once("_protectpage.php");
include_once('../bdd/connect_inc.php');
$nom_fondant = $_POST['nom_fondant'];
$parfum_fondant = $_POST['parfum_fondant'];
$img_fondant_1 = $_POST['img_fondant_1']['name'];
$prix_forme_1 = $_POST['prix_forme_1'];
$poids_forme_1 = $_POST['poids_forme_1'];
$stock_forme_1 = $_POST['stock_forme_1'];
$promo_fondant = $_POST['promo_fondant'];
$img_fondant_name = $_POST['img_fondant']['name'];
$img_fondant_tmp_name = $_POST['img_fondant']['tmp_name'];
$img_fondant_folder = '../res/img/fondant/';

move_uploaded_file($img_fondant_tmp_name, $img_fondant_folder . $img_fondant_name);


$req = $pdo->prepare('INSERT INTO `fondant`(`nom_fondant`, `parfum_fondant`, `img_fondant_1`, `poids_forme_1`, `prix_forme_1`, `stock_forme_1`, `promo_fondant`) VALUES (:nom_fondant, :parfum_fondant, :img_fondant_1,:poids_forme_1, :prix_forme_1, :stock_forme_1, :promo_fondant)');
$req->execute(array('nom_fondant' => $nom_fondant, 'parfum_fondant' => $parfum_fondant, 'img_fondant_1' => $img_fondant_1, 'poids_forme_1' => $poids_forme_1, 'prix_forme_1' => $prix_forme_1,  'stock_forme_1' => $stock_forme_1, 'promo_fondant' => $promo_fondant));
$req->closeCursor();
header('Location: produit.php');
echo var_dump($_POST['img_fondant_1']['name']);
