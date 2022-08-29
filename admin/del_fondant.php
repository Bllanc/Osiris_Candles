<?php
// require_once("_protectpage.php");
    include_once('../bdd/connect_inc.php');
    $id_fondant = $_POST['id_fondant']; 

    $req = $pdo->prepare('SELECT img_fondant_1 FROM fondant WHERE id_fondant = :id_fondant'); // Selection des images dans fondant par rapport a l'id
    $req->execute(array(
        'id_fondant' => $id_fondant
    ));

    foreach ($req as $fondant) { 
        $del_fondant = $fondant['img_fondant_1'];
    }

    unlink('../res/img/fondant/'.$del_fondant.''); // Suppressionde l'image dans le dossier 

    $req = $pdo->prepare('DELETE FROM `fondant` WHERE id_fondant = :id_fondant');  // Suppression du fondant sélectionner par l'id
    $req->execute(array(
        'id_fondant' => $id_fondant));
    $req -> closeCursor();
 header('Location: produit.php'); // Retour sur la page produit
