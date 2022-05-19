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
    <title>Osiris Candles - Fondant </title>
    <meta name='viewport' content='width=1000, initial-scale=1'>
    <link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
    <link rel="stylesheet" href="<?php echo $path ?>/css/card.css">
</head>

<body>
    <?php require_once '../vue/header.php' ?>
    <div class="container">
        <h1>Nos Fondants</h1>
        <hr>

        <?php

        foreach ($pdo->query("SELECT * FROM `fondant` ORDER BY parfum_fondant ASC") as $key => $row) {
            echo "
            <div class='card'>
            <form action='../bdd/add_panier.php' method='POST'>
            <h3>" . ucfirst($row['nom_fondant']) . "</h3>
            <input type='hidden' value='" . $row['nom_fondant'] . "' name='nom'>
            <input type='hidden' value='" . $row['parfum_fondant'] . "' name='nom'>
            <div class='card_img'><img src='" . $path . "/res/img/fondant/" . $row['img_fondant_1'] . "' alt='Image'></div>
            <input type='hidden' value='fondant/" . $row['img_fondant_1'] . "' name='img'>
            <button class='moins' type='text' name='" . $key . "'>
                <ion-icon name='remove-outline'></ion-icon>
            </button>
            <input type='text' value='1' min='0' disabled>
            <button class='plus' type='text' name='" . $key . "'>
                <ion-icon name='add-outline'></ion-icon>
            </button>
            <input name='quantite' type='hidden' value='1' min='0' id='quantite_" . $key . "'>
            <hr>
            <input type='radio' name='pack_" . $key . "' class='fondant_radio' value='1' id='pack_" . $key . "'>
            <label for='pack_" . $key . "'>X 1</label>

            <input type='radio' name='pack_" . $key . "' class='fondant_radio'  value='5' id='pack_" . $key . "' checked>
            <label for='pack_" . $key . "'>X 5</label>

            <input type='radio' name='pack_" . $key . "' class='fondant_radio' value='10' id='pack_" . $key . "'>
            <label for='pack_" . $key . "'>X 10</label>
            <br>
            <p class='prixs" . $key . "'>" . number_format($row['prix_forme_1'] * 5, 2, '.', '') . "€</p>
            <input type='hidden' value='" . $row['prix_forme_1'] . "' class='prix_unit" . $key . "'>
            <input type='hidden' value='" . $row['prix_forme_1'] * 5 . "' name='prix' class='prix_end" . $key . "'>
            <input type='hidden' value='" . $row['poids_forme_1'] * 5 . "' name='poids'>
            <br>
            <button class='add'>Ajouter</button>
            </form>
        </div>
            
            ";
        }

        ?>
    </div>



    <?php require_once '../vue/footer.php' ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $path ?>/js/card.js"></script>
</body>

</html>