<?php

session_start();

if (isset($_SESSION['nb_panier'])) {
    $_SESSION['nb_panier'] = intval($_SESSION['nb_panier']) + 1;
} else {
    $_SESSION['nb_panier'] = 1;
}

if (isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array_merge($_SESSION['panier'], ['article'.$_SESSION['nb_panier']]);
} else {
    $_SESSION['panier'] = ['article'.$_SESSION['nb_panier']];
}

$_SESSION['panier']['article'.$_SESSION['nb_panier']] = ["nom" => $_POST['nom'],"img" => $_POST['img'],"prix" => $_POST['prix'],"quantite" => $_POST['quantite'],"poids" => $_POST['poids']];

header("Location: ../controleur/panier.php");
