<?php
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/OsirisCandles";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>


<link rel="stylesheet" href="<?php echo $path ?>/css/sur_footer.css">



<section>
    <hr>
    <div class="sur_footer">

        <div class="infos_sur">
            <a href="<?php echo $path ?>/metier/retour.php">
                <ion-icon size="large" name="time-outline"></ion-icon>
                <br>
                <p>Retour gratuit sous 2 Mois</p>
            </a>
        </div>
        <div class="infos_sur">
            <a href="<?php echo $path ?>/metier/livraison.php">
                <ion-icon size="large" name="airplane-outline" id="avion"></ion-icon>
                <br>
                <p>Livraison gratuite des 49€</p>
            </a>
        </div>
        <div class="infos_sur">
            <a href="<?php echo $path ?>/metier/retour.php">
                <ion-icon size="large" name="time-outline"></ion-icon>
                <br>
                <p>Retour gratuit sous 2 Mois</p>
            </a>
        </div>
        </a>
        <div class="infos_sur">
            <a href="<?php echo $path ?>/metier/fidelite.php">
                <ion-icon size="large" name="ribbon-outline"></ion-icon>
                <br>
                <p>Des Points de Fidélité</p>
            </a>
        </div>

    </div>
    <p id="infliv">(*Livraison à domicile offerte en France métropolitaine pour toute commande d'un montant supérieur à 49€ (hors Chronopost). Offre valable uniquement sur les produits disponibles à la vente en ligne dans la limite des stocks disponibles.)</p>
    <hr>
</section>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>