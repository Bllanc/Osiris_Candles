<?php
// require_once("_protectpage.php");
include_once('../bdd/connect_inc.php');
$nom_fiole = $_POST['nom_fiole'];
$parfum_fiole = $_POST['parfum_fiole'];
$img_fiole_1 = $_POST['img_fiole_1']['name'];
$prix_forme_1 = $_POST['prix_forme_1'];
$poids_forme_1 = $_POST['poids_forme_1'];
$stock_forme_1 = $_POST['stock_forme_1'];
$promo_fiole = $_POST['promo_fiole'];
$img_fiole_name = $_POST['img_fiole']['name'];
$img_fiole_tmp_name = $_POST['img_fiole']['tmp_name'];
$img_fiole_folder = '../res/img/fiole/';

move_uploaded_file($img_fiole_tmp_name, $img_fiole_folder . $img_fiole_name);


$req = $pdo->prepare('INSERT INTO `fiole`(`nom_fiole`, `parfum_fiole`, `img_fiole_1`, `poids_forme_1`, `prix_forme_1`, `stock_forme_1`, `promo_fiole`) VALUES (:nom_fiole, :parfum_fiole, :img_fiole_1,:poids_forme_1, :prix_forme_1, :stock_forme_1, :promo_fiole)');
$req->execute(array('nom_fiole' => $nom_fiole, 'parfum_fiole' => $parfum_fiole, 'img_fiole_1' => $img_fiole_1, 'poids_forme_1' => $poids_forme_1, 'prix_forme_1' => $prix_forme_1,  'stock_forme_1' => $stock_forme_1, 'promo_fiole' => $promo_fiole));
$req->closeCursor();
header('Location: produit.php');
echo var_dump($_POST['img_fiole_1']['name']);
