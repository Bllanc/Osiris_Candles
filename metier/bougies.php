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
    <title>Osiris Candles - Bougies </title>
    <meta name='viewport' content='width=1000, initial-scale=1'>
    <link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
    <link rel="stylesheet" href="<?php echo $path ?>/css/card.css">
</head>

<body>



    <?php require_once '../vue/header.php' ?>

    <h1>Nos Bougies</h1>
    <div class="mess">
        <i>Lors d'un moment spécial, pour offrir ou juste pour se détendre les bougies parfumées sont géniales pour retrouver un petit moment de convivialité à partager.</i>
    </div>
    <hr>
    <div class="container">
        <?php

        foreach ($pdo->query("SELECT * FROM `bougie` WHERE 1") as $key => $row) {
            echo "
            
            <div class='card'>
            <form action='../bdd/add_panier.php' method='POST'>
            <h3>" . $row['nom_bougie'] . "</h3>
            <input type='hidden' value='" . $row['nom_bougie'] . "' name='nom'>
            <div class='card_img'><img src='" . $path . "/res/img/bougie/" . $row['image_bougie'] . "' alt='Image'></div>
            <input type='hidden' value='bougie/" . $row['image_bougie'] . "' name='img'>
            <button class='moins' type='text' name='" . $key . "'>
                <ion-icon name='remove-outline'></ion-icon>
            </button>
            <input type='text' value='1' min='0' disabled>
            <button class='plus' type='text' name='" . $key . "'>
                <ion-icon name='add-outline'></ion-icon>
            </button>
            <input name='quantite' type='hidden' value='0' min='0' id='quantite_" . $key . "'>
            <hr>
           <select onfocus='this.size=10;' onblur='this.size=1;' onchange='this.size=1;' this.blur();>";
            echo count(explode(",", $row['parfum_bougie']));
            for ($i = 0; $i < count(explode(",", $row['parfum_bougie'])); $i++) {
                echo "<option>" . explode(",", $row['parfum_bougie'])[$i] . "</option>";
            }
            echo "
            </select>
            <br>
            <p>" . $row['prix_bougie'] . "€</p>
            <input type='hidden' value='" . $row['prix_bougie'] . "' name='prix'>
            <input type='hidden' value='" . $row['poids_bougie'] . "' name='poids'>
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