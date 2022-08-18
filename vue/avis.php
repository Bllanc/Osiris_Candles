<?php
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/OsirisCandles";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>

<?php
require_once('./bdd/connect_inc.php');
?>

<head>
    <link rel="stylesheet" href="<?php echo $path ?>/css/avis.css">
</head>

<body>


    <div id="avis">

        <div class="slider">
            <div class="prec"  onclick="ChangeSlide(-1)">
                <ion-icon size="large" name="arrow-back"></ion-icon>
            </div>



            <div id="comm">
                <p> <?php
                    $req = $pdo->query('SELECT * FROM commentaire ORDER BY note DESC');
                    foreach ($req as $comm) { ?>
                <div class="commentaires">
                    <p class="commentaire_<?php echo $comm['id_commentaire']; ?>"></p>
                </div>
            <?php } ?></p>
            </div>


            

            <div class="suivre" onclick="ChangeSlide(1)">
                <ion-icon size="large" name="arrow-forward"></ion-icon>
            </div>
        </div>
        <div id="write_com">
            <a href="<?php echo $path ?>/controleur/commentaire.php">Donner votre avis</a>
        </div>

    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $path ?>/js/avis.js"></script>
</body>