<?php
session_start();
require_once '../bdd/connect_inc.php';
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/OsirisCandles";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>

<?php
require_once('../bdd/connect_inc.php');
?>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Osiris Candles - Commentaires </title>
    <meta name='viewport' content='width=1000, initial-scale=1'>
    <link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="<?php echo $path ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo $path ?>/css/commentaire.css">

</head>

<body>
    <?php require_once '../vue/header.php' ?>
    <div class="container">
        <h1>Vos Commentaires </h1>

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
                        <p>" . $row2['commentaire'] . "</p>
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



        <div id="commentaires">
            <h2>Laisser un Commentaire</h2>
            <form method="POST" action="../bdd/add_commentaire.php">
                <textarea name="commentaire" rows="10" cols="80" maxlength="255" placeholder="255 caractères max"></textarea>
                <br>
                <div name ="note" class="rating">
                    <!--
   --><a href="#5" title="Donner 5 étoiles">☆</a>
                    <!--
   --><a href="#4" title="Donner 4 étoiles">☆</a>
                    <!--
   --><a href="#3" title="Donner 3 étoiles">☆</a>
                    <!--
   --><a href="#2" title="Donner 2 étoiles">☆</a>
                    <!--
   --><a href="#1" title="Donner 1 étoile">☆</a>
                </div>
                <button>Publier</button>
            </form>
        </div>
    </div>
    <?php require_once '../vue/footer.php' ?>








    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $path ?>/js/commentaire.js"></script>
</body>