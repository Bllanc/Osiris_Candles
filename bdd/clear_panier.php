<?php

session_start();
header("Location: ../controleur/panier.php");



unlink('plaques_utilisateurs/' . $_SESSION['email'] . '/' .  strtok($_SESSION['panier_titre_' . $_POST['delete']], " ") . '.php');

unset($_SESSION['panier_id_' . $_POST['delete']]);
unset($_SESSION['panier_quantite_' . $_POST['delete']]);
unset($_SESSION['panier_url_' . $_POST['delete']]);
unset($_SESSION['panier_titre_' . $_POST['delete']]);
unset($_SESSION['panier_prix_' . $_POST['delete']]);