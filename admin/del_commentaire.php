<?php
// require_once("_protectpage.php");
    include_once('../bdd/connect_inc.php');
    $id_commentaire = $_POST['id_commentaire']; 

    $req = $pdo->prepare('DELETE FROM commentaire WHERE id_commentaire = :id_commentaire');  // Suppression du commentaire sélectionner par l'id
    $req->execute(array(
        'id_commentaire' => $id_commentaire)); // ligne 8
    $req -> closeCursor();
 header('Location: comms.php'); // Retour sur la page commentaire
