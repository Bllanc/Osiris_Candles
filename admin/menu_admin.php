<?php
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
<title>Osiris Candles - Pannel Admin</title>

<div class="navigation">
    <ul>
        <li>
            <a href="#">
                <span class="icon"></span>
                <span class="Title">Osiris Candles</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $path ?>/admin/index.php">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Tableau de Bord</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $path ?>/admin/client.php">
                <span class="icon">
                    <ion-icon name="people-outline"></ion-icon>
                </span>
                <span class="title">Clients</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $path ?>/admin/produit.php">
                <span class="icon">
                    <ion-icon name="medkit-outline"></ion-icon>
                </span>
                <span class="title">Articles</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $path ?>/admin/">
                <span class="icon">
                    <ion-icon name="cube-outline"></ion-icon>
                </span>
                <span class="title">Commandes</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $path ?>/admin/">
                <span class="icon">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </span>
                <span class="title">Facture</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $path ?>/admin/">
                <span class="icon">
                    <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                </span>
                <span class="title">Commentaires</span>
            </a>
        </li>
        <li>
            <a href="../index.php">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Déconnexion</span>
            </a>
        </li>
    </ul>
</div>

<div class="main">

    <div class="topbar">
        <div class="toggle">
            <ion-icon name="reorder-three-outline"></ion-icon>
        </div>

        <div class="search">
            <label>
                <input type="text" placeholder="Recherche">
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </div>

        <div class="superhero">
            <img src="<?php echo $path ?>/res/img/osiris_candles.png" alt="">
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>