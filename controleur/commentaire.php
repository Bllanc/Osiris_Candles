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
    <title>Osiris Candles - Mon Compte </title>
    <meta name='viewport' content='width=1000, initial-scale=1'>
    <link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="<?php echo $path ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo $path ?>/css/commentaire.css">

</head>

<body>
    <?php require_once '../vue/header.php' ?>
    <div class="container">
        <div id="commentaires">
            <h2>Laisser un Commentaire</h2>
            <form method="" action="">
                <textarea rows="10" cols="80"></textarea>
                <br>
                <div class="rating">
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