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
            <a href="">
                <ion-icon size="large" name="time-outline"></ion-icon>
                <br>
                <span>Retour gratuit sous 2 Mois</span>
            </a>
        </div>
        <div class="infos_sur">
            <a href="">
                <ion-icon size="large" name="airplane-outline" id="avion"></ion-icon>
                <br>
                <span>Livraison gratuite des 49€</span>
            </a>
        </div>
        <div class="infos_sur">
            <a href="">
                <ion-icon size="large" name="time-outline"></ion-icon>
                <br>
                <span>Retour gratuit sous 2 Mois</span>
            </a>
        </div>
        </a>
        <div class="infos_sur">
            <a href="">
                <ion-icon size="large" name="ribbon-outline"></ion-icon>
                <br>
                <span>Des Points de Fidélité</span>
            </a>
        </div>

    </div>
    <hr>
</section>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>