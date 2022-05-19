<?php
session_start();

unset($_SESSION['panier'][$_POST['article']]);

header("Location: ../controleur/panier.php");