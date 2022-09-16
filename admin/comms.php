<?php
session_start();
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/OsirisCandles";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>
<?php
require_once('../bdd/connect_inc.php');
?>

<link rel="stylesheet" href="../css/panel_admin.css">
<link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
<link rel="stylesheet" href="<?php echo $path ?>/css/commentaire.css">
<title>Osiris Candles - Commentaires </title>

<body>


    <div class="container">
        <?php require_once 'menu_admin.php' ?>
        <div id="vosComs">

            <?php
            foreach ($pdo->query("SELECT * FROM `utilisateur` WHERE 1") as $key => $row) {
                foreach ($pdo->query("SELECT * FROM `commentaire` WHERE id_utilisateur=" . $row['id_utilisateur']) as $key2 => $row2) {
                    echo "
                <div>
                    <div id='perso'>
                        <h2>" . $row['nom_utilisateur'] . ' ' . $row['prenom_utilisateur'] . "</h2>
                        <input type='hidden' value='" . $row['id_utilisateur'] . "' name='id_utilisateur'>
                        <img src='" . $path . "/res/img/avatar/" . $row['user_img'] . "' alt='Image'>
                        <input type='hidden' value='" . $row['user_img'] . "' name='user_img'>
                    </div>
                    <br>
                        <q>" .  $row2['commentaire'] .  "</q>
                        <input type='hidden' value='" . $row2['id_commentaire'] . "' name='id_commentaire'>
                    <br>
                        <p>" . $row2['note'] . "/5</p>
                        <input type='hidden' value='" . $row2['note'] . "' name='note'>
                        <div>
                            <form method='POST' action='del_commentaire.php' enctype='multipart/form-data'>
                            <input type='hidden' class='id_commentaire_" . $row2['id_commentaire'] . "' name='id_commentaire' value= '" . $row2['id_commentaire'] . "'>
                            <button class=trash' type='submit'>
                                <ion-icon name='trash-outline'></ion-icon>
                            </button> 
                            </form>
                        </div>
                </div>
            ";
                }
            }

            ?>
        </div>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="../js/panel_admin.js"></script>

</body>