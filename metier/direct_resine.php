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
    <link rel="stylesheet" href="<?php echo $path ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo $path ?>/css/direct_resine.css">
</head>

<body>
    <?php require_once '../vue/header.php' ?>
    <div class="container">
        <div>
            <a href="<?php echo $path ?>/metier/porte_cles.php">
                <div id="pc" class="blanc">
                    <img src="<?php echo $path ?>/res/img/cerf.jpg" alt="Made in France">
                    <h4>Porte-Clés</h4>
                </div>
            </a>
        </div>
        <div>
            <a href="<?php echo $path ?>/metier/bougeoire.php">
                <div id="boug" class="blanc">
                    <img src="<?php echo $path ?>/res/img/cerf.jpg" alt="Fait Main">
                    <h4>Bougeoire</h4>
                </div>
            </a>
        </div>
        <div>
            <a href="<?php echo $path ?>/metier/stylos.php">
                <div id="stylo" class="blanc">
                    <img src="<?php echo $path ?>/res/img/cerf.jpg" alt="Parfum">
                    <h4>Stylos</h4>
                </div>
            </a>
        </div>
        <div>
            <a href="<?php echo $path ?>/metier/divers.php">
                <div id="divers" class="blanc">
                    <img src="<?php echo $path ?>/res/img/cerf.jpg" alt="Parfum">
                    <h4>Divers</h4>
                </div>
            </a>
        </div>
        <div>
            <a href="<?php echo $path ?>/metier/fantasie.php">
                <div id="fant" class="blanc">
                    <img src="<?php echo $path ?>/res/img/cerf.jpg" alt="Parfum">
                    <h4>Fantaisie</h4>
                </div>
            </a>
        </div>
    </div>


    <?php require_once '../vue/sur_footer.php' ?>
    <?php require_once '../vue/footer.php' ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $path ?>/js/direct_resine.js"></script>
</body>

</html>