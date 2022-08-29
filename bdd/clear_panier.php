<?php

session_start();

unset($_SESSION["nb_panier"]);
header("Location: ../controleur/panier.php");
