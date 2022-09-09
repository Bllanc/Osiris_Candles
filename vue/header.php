<?php
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/OsirisCandles";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>

<link rel="stylesheet" href="<?php echo $path ?>/css/header.css">

<header>
    <div class="main">
        <nav id="menu">
            <div id="button_menu_smartphone">
                <ion-icon size="large" name="reorder-four-outline"></ion-icon>
            </div>
            <ul>
                <div class="dropdown">
                    <button class="dropbtn"> <a href="<?php echo $path ?>/index.php">Accueil</button></a>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"> <a href="<?php echo $path ?>/metier/bougies.php">Bougies</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a href="<?php echo $path ?>/metier/fondant.php">Fondants</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a href="<?php echo $path ?>/metier/coffret.php">Coffrets</a></button>
                </div>
                <li id="mid"><img src="<?php echo $path ?>/res/img/osiris_candles.png" alt=""></li>
                <div class="dropdown">
                    <button class="dropbtn"><a href="<?php echo $path ?>/metier/fiole.php">Fiole/Brume parfumé</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a href="<?php echo $path ?>/metier/direct_resine.php">Décoration</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">
                        <a href="<?php echo $path ?>/controleur/panier.php">Mon Panier</a>
                    </button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><?php if (isset($_SESSION['mail_utilisateur'])) {
                                                echo "<a href='" . $path . "/controleur/mon_compte.php'>Mon Compte</a>";
                                            } else {
                                                echo "<a href='" . $path . "/bdd/login.php'>Connexion</a>";
                                            } ?>
                    </button>
                </div>
            </ul>
        </nav>


        <nav id="menu_smartphone">
            <ul>
                <div class="dropdown">
                    <a href="<?php echo $path ?>/index.php"><button class="dropbtn">Accueil</button></a>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"> <a href="<?php echo $path ?>/metier/bougies.php">Bougies</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a href="<?php echo $path ?>/metier/fondant.php">Fondants</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a href="<?php echo $path ?>/metier/coffret.php">Coffrets</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a href="<?php echo $path ?>/metier/fiole.php">Fiole/Brume parfumé</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a href="<?php echo $path ?>/metier/direct_resine.php">Décoration</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">
                        <a href="<?php echo $path ?>/controleur/panier.php">Mon Panier</a>
                    </button>
                </div>
            </ul>
        </nav>
    </div>
</header>
<script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $path ?>/js/header.js"></script>