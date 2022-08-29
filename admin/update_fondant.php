<?php
// require_once("_protectpage.php");                        
include_once('../bdd/connect_inc.php');
$id_fondant = $_POST['id_fondant'];
$nom_fondant = $_POST['nom_fondant'];
$parfum_fondant = $_POST['parfum_fondant'];
$img_fondant_1_name = $_FILES['img_fondant_1']['name'];
$poids_forme_1 = $_POST['poids_forme_1'];
$prix_forme_1 = $_POST['prix_forme_1'];
$stock_forme_1 = $_POST['stock_forme_1'];
$promo_fondant = $_POST['promo_fondant'];

$req = $pdo->prepare("UPDATE fondant SET 
nom_fondant = :nom_fondant, 
parfum_fondant = :parfum_fondant,
img_fondant_1 = :img_fondant_1,
poids_forme_1 = :poids_forme_1, 
stock_forme_1 = :stock_forme_1, 
prix_forme_1 = :prix_forme_1, 
promo_fondant = :promo_fondant 
WHERE id_fondant = :id_fondant");

$req->execute(array(
    'nom_fondant' => $nom_fondant,
    'parfum_fondant' => $parfum_fondant,
    'img_fondant_1' => $img_fondant_1_name,
    'poids_forme_1' => $poids_forme_1,
    'stock_forme_1' => $stock_forme_1,
    'prix_forme_1' => $prix_forme_1,
    'promo_fondant' => $promo_fondant,
    'id_fondant' => $id_fondant
));
$req->closeCursor();

header('Location: produit.php');
