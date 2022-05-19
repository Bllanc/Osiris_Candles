<?php
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/OsirisCandles";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>


<link rel="stylesheet" href="<?php echo $path ?>/css/footer.css">



<footer>
    <div id="logo">
        <h2>Réseaux sociaux</h2>
        <a class="fb" href="https://www.facebook.com/OsirisCandles/" target='_blank'>
            <ion-icon  name="logo-facebook"></ion-icon>
        </a>
        <a class="fb" href="https://www.instagram.com/osiriscandles1/" target='_blank'>
            <ion-icon  name="logo-instagram"></ion-icon>
        </a>
    </div>
    <hr>
    <table id="contenue_footer">
        <ul>
            <li><u>Mon compte</u></li>
            <li><a href="<?php echo $path ?>/bdd/login.php">Inscription/Connexion</a>
            </li>
            <li><a href="<?php echo $path ?>/controleur/mon_compte.php">Mes Commandes</a>
            <li><a href="<?php echo $path ?>/controleur/panier.php">Mon Panier</a></li>

            </li>
        </ul>
        <ul>
            <li><u>Contacts</u></li>
            <li><u>Adresse :</u> 752 Rue de L'Église </li>
            <li>62340 Hames-Boucres</li>
            <li><u>Tél :</u> 06 06 06 06 06</li>
            <li><a href="<?php echo $path ?>/controleur/contact.php">Contactez-nous</a></li>
        </ul>
        <ul>
            <li><u>Guide D'achats</u></li>
            <li><a href="<?php echo $path ?>/controleur/cgv.php">Conditions Générale de Vente</a></li>
            <li><a href="<?php echo $path ?>/controleur/mentions_legal.php">Mentions légales</a>
            </li>

        </ul>

        <hr>
        <div>
            <p class="cc"><a href="https://cyberinfo-connect.fr/" target="_blank">Réalisé par CyberInfo-Connect</a>
                <a href="https://www.facebook.com/GuillaumeMantez/" target="_blank">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>

            </p>
        </div>
</footer>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</footer>