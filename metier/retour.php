<?php
session_start();
require_once '../bdd/connect_inc.php';
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/OsirisCandles";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Osiris Candles - Retour </title>
    <meta name='viewport' content='width=1000, initial-scale=1'>
    <link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
    <link rel="stylesheet" href="<?php echo $path ?>/css/infos.css">
</head>

<body>
    <?php require_once '../vue/header.php' ?>
    <div class="navigation">
        <p>
            <a href="<?php echo $path ?>/index.php">Accueil →</a>
            <span> Retour </span>
        </p>
    </div>
    <div class="container">
        <div>
            <h1>Retour et Remboursement</h1>
        </div>
        <h2>Les retours chez Osiris Candles sont : </h2>
        <div class="infos_retour">
            <div>
                <b>Dans un délais de 2 Semaines</b>
                <br>
                <p>à compter de la récéption de votre commande </p>
            </div>
            <div>
                <b>Sur tout les articles </b>
                <br>
                <p>avec ou sans emballage</p>
            </div>
            <div>
                <b>Gratuit</b>
                <br>
                <p>si vous passez par Mondial Relay</p>
            </div>
        </div>
        <h2>Comment faire ?</h2>
        <div class="expli">
            <div>
                <p>Par voie postale  <ion-icon size="large" name="mail-outline"></ion-icon>
                </p>
            </div>
            <div></div>
        </div>
    </div>



    <?php require_once '../vue/sur_footer.php' ?>
    <?php require_once '../vue/footer.php' ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $path ?>/js/card.js"></script>
</body>

</html>