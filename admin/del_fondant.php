<?php
// require_once("_protectpage.php");
    include_once('../bdd/connect_inc.php');
    $id_fondant = $_POST['id_fondant']; 

    $req = $pdo->prepare('DELETE FROM `fondant` WHERE id_fondant = :id_fondant');
    $req->execute(array(
        'id_fondant' => $id_fondant));
    $req -> closeCursor();
 header('Location: produit.php');
