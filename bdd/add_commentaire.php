<?php
session_start();
require_once('connect_inc.php');

$commentaire = $_POST['commentaire'];
$note = $_POST['note'];

$req = $pdo->prepare('INSERT INTO commentaire  
(commentaire, note) VALUES (:commentaire, :note)');
$req->execute(array(
    'commentaire' => $commentaire,
    'note' => $note
));
$req->closeCursor();
header('Location: commentaire.php');
