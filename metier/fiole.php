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
    <title>Osiris Candles - Fioles Parfumés </title>
    <meta name='viewport' content='width=1000, initial-scale=1'>
    <link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
    <link rel="stylesheet" href="<?php echo $path ?>/css/card.css">
</head>

<body>

    <?php require_once '../vue/header.php' ?>
    <div class="container">
        <div id="fiole">
            <h1>Nos Fioles Parfumées</h1>
            <hr>

            <?php
            foreach ($pdo->query("SELECT * FROM `fiole` ORDER BY parfum_fiole ASC") as $key => $row) {
                echo "
            
            <div class='card'>
            <form action='../bdd/add_panier.php' method='POST'>
            <h3>" . $row['nom_fiole'] . "</h3>
            <input type='hidden' value='" . $row['nom_fiole'] . "' name='nom'>
            <div class='card_img'><img src='" . $path . "/res/img/fiole/" . $row['img_fiole'] . "' alt='Image'></div>
            <input type='hidden' value='fiole/" . $row['img_fiole'] . "' name='img'>
            <button class='moins' type='text' name='" . $key . "'>
                <ion-icon name='remove-outline'></ion-icon>
            </button>
            <input type='text' value='0' min='0' disabled>
            <button class='plus' type='text' name='" . $key . "'>
                <ion-icon name='add-outline'></ion-icon>
            </button>
            <input name='quantite' type='hidden' value='0' min='0' id='quantite_" . $key . "'>
            <hr>
            <p>" . $row['prix_fiole'] . "€</p>
            <input type='hidden' value='" . $row['prix_fiole'] . "' name='prix'>
            <input type='hidden' value='" . $row['poids_fiole'] . "' name='poids'>
            <br>
            <button class='add'>Ajouter</button>
            </form>
        </div>
            
            ";
            }

            ?>
        </div>
        <div id="brume">
            <h1>Nos Brume Parfumées</h1>
            <hr>

            <?php
            foreach ($pdo->query("SELECT * FROM `brume_parfume` ORDER BY parfum_brumes ASC") as $key => $row) {
                echo "
            
            <div class='card'>
            <form action='../bdd/add_panier.php' method='POST'>
            <h3>" . $row['nom_brume'] . "</h3>
            <input type='hidden' value='" . $row['nom_brume'] . "' name='nom'>
            <div class='card_img'><img src='" . $path . "/res/img/brume/" . $row['img_brume'] . "' alt='Image'></div>
            <input type='hidden' value='brume/" . $row['img_brume'] . "' name='img'>
            <button class='moins' type='text' name='" . $key . "'>
                <ion-icon name='remove-outline'></ion-icon>
            </button>
            <input type='text' value='0' min='0' disabled>
            <button class='plus' type='text' name='" . $key . "'>
                <ion-icon name='add-outline'></ion-icon>
            </button>
            <input name='quantite' type='hidden' value='0' min='0' id='quantite_" . $key . "'>
            <hr>
            <p>" . $row['prix_brume'] . "€</p>
            <input type='hidden' value='" . $row['prix_brume'] . "' name='prix'>
            <input type='hidden' value='" . $row['poids_brume'] . "' name='poids'>
            <br>
            <button class='add'>Ajouter</button>
            </form>
        </div>
            
            ";
            }

            ?>
        </div>
    </div>
    <?php require_once '../vue/footer.php' ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $path ?>/js/card.js"></script>
</body>