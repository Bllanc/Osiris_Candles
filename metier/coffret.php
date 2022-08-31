<?php
session_start();
require_once '../bdd/connect_inc.php';
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/OsirisCandles";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Osiris Candles - Coffrets </title>
    <meta name='viewport' content='width=1000, initial-scale=1'>
    <link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
    <link rel="stylesheet" href="<?php echo $path ?>/css/card.css">
</head>

<body>



    <?php require_once '../vue/header.php' ?>

    <h1>Nos Coffrets</h1>
    <hr>
    <div class="container">
        <?php

        foreach ($pdo->query("SELECT * FROM `coffret` WHERE 1") as $key => $row) {
            echo "
            
            <div class='card'>
            <form action='../bdd/add_panier.php' method='POST'>
            <h3>" . $row['nom_coffret'] . "</h3>
            <input type='hidden' value='" . $row['nom_coffret'] . "' name='nom'>
            <div class='card_img'><img src='" . $path . "/res/img/coffret/" . $row['img_coffret'] . "' alt='img'></div>
            <input type='hidden' value='coffret/" . $row['img_coffret'] . "' name='img'>
            <button class='moins' type='text' name='" . $key . "'>
                <ion-icon name='remove-outline'></ion-icon>
            </button>
            <input type='text' value='1' min='0' disabled>
            <button class='plus' type='text' name='" . $key . "'>
                <ion-icon name='add-outline'></ion-icon>
            </button>
            <input name='quantite' type='hidden' value='0' min='0' id='quantite_" . $key . "'>
            <hr>
            <br>
            <p>" . $row['prix_coffret'] . "€</p>
            <input type='hidden' value='" . $row['prix_coffret'] . "' name='prix'>
            <input type='hidden' value='" . $row['poids_coffret'] . "' name='poids'>
            <br>
            <button class='add'>Ajouter</button>
            </form>
        </div>
            
            ";
        }

        ?>
    </div>
    <?php require_once '../vue/sur_footer.php' ?>
    <?php require_once '../vue/footer.php' ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $path ?>/js/card.js"></script>
</body>