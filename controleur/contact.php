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
    <title>Osiris Candles - Nous Contacter </title>
    <meta name='viewport' content='width=1000, initial-scale=1'>
    <link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="<?php echo $path ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo $path ?>/css/contact.css">

</head>

<body>
    <?php require_once '../vue/header.php' ?>

    <div class="container">
        <div class="firstL">
            <div class="adresse">
                <ion-icon size="large" name="earth-outline"></ion-icon>
                <br>
                <h3>Notre Adresse</h3>
                <br>
                <p>752 Rue de L'Eglise, 62430 Hames-Boucres</p>
            </div>
            <div class="mail">
                <a href="mailto:osiris.candles1@laposte.net">
                    <ion-icon size="large" name="mail-outline"></ion-icon>
                    <br><br>
                    <h3>E-mail</h3>
                    <br>
                    <p>osiris.candles1@laposte.net</p>
                </a>
            </div>
            <div class="tel">
                <a href="tel:0769482264">
                    <ion-icon size="large" name="call-outline"></ion-icon>
                    <br><br>
                    <h3>Nous appeler</h3>
                    <br>
                    <p>07.69.48.22.64</p>
                </a>
            </div>
        </div>

        <div class="sndL">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2517.548737108699!2d1.8379766999999998!3d50.8765535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc38f6e04bfde1%3A0x99c1948e8b732756!2s752%20Rue%20de%20l&#39;%C3%89glise%2C%2062340%20Hames-Boucres!5e0!3m2!1sfr!2sfr!4v1662970119852!5m2!1sfr!2sfr" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div>
                <form action="">
                    <span class="info">
                        <span> <input type="text" size="40" placeholder="Nom" required></span>
                        <span> <input type="text" size="40" placeholder="Prénom" required></span>
                    </span>
                    <span class="object">
                        <span>
                            <input type="text" size="86" placeholder="Objet" aria-required>
                        </span>

                    </span>
                    <textarea name="" id="" cols="85" rows="10" placeholder="Message" required></textarea>
                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>

    <?php require_once '../vue/sur_footer.php' ?>
    <?php require_once '../vue/footer.php' ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $path ?>/js/commentaire.js"></script>
</body>