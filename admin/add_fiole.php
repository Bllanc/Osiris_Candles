<?php
require_once("_protectpage.php");
include_once('../bdd/connect_inc.php');
$nom_fiole = $_POST['nom_fiole'];
$img_fiole = $_FILES['img_fiole']['name'];
$prix_fiole = $_POST['prix_fiole'];
$poids_fiole = $_POST['poids_fiole'];
$stock_fiole = $_POST['stock_fiole'];
$promo_fiole = $_POST['promo_fiole'];
$img_fiole_name = $_FILES['img_fiole']['name'];
$img_fiole_tmp_name = $_FILES['img_fiole']['tmp_name'];
$img_fiole_folder = '../res/image/fiole/';

move_uploaded_file($img_fiole_tmp_name, $img_fiole_folder . $img_fiole_name);

$req = $pdo->prepare('INSERT INTO fiole  (
    nom_fiole, 
    img_fiole, 
    prix_fiole, poids_fiole, stock_fiole, 
    promo_fiole) VALUES (:nom_fiole, 
    :img_fiole, 
    :prix_fiole, :poids_fiole, :stock_fiole, 
    :promo_fiole)');
$req->execute(array(
    'nom_fiole' => $nom_fiole,
    'img_fiole' => $img_fiole,
    'prix_fiole' => $prix_fiole, 'poids_fiole' => $poids_fiole, 'stock_fiole' => $stock_fiole,
    'promo_fiole' => $promo_fiole
));
$req->closeCursor();
header('Location: produit.php');
