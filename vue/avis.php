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


    <div class="slideshow-container">

        <div class="slider">

            <div id="comm">
                <div>
                    <?php
                    foreach ($pdo->query("SELECT * FROM `utilisateur` WHERE 1") as $key => $row) {
                        foreach ($pdo->query("SELECT * FROM `commentaire` WHERE id_utilisateur=" . $row['id_utilisateur']) as $key2 => $row2) {
                            echo "
                            <div class='mySlides fade'>
                                <div id='perso'>
                                    <h2>" . $row['nom_utilisateur'] . ' ' . $row['prenom_utilisateur'] . "</h2>
                                    <input type='hidden' value='" . $row['id_utilisateur'] . "' name='id_utilisateur'>
                                    <img src='" . $path . "/res/img/avatar/" . $row['user_img'] . "' alt='Image'>
                                    <input type='hidden' value='" . $row['user_img'] . "' name='user_img'>
                                </div>
                                <br>
                                <q class='fp'>" .  $row2['commentaire'] .  "</q>
                                <input type='hidden' value='" . $row2['commentaire'] . "' name='commentaire'>
                                <br>
                                <p>" . $row2['note'] . "/5</p>
                                <input type='hidden' value='" . $row2['note'] . "' name='note'>
                            </div>
                            ";
                        }
                    }
                    ?>
                </div>
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