<?php
session_start();
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/OsirisCandles";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Osiris Candles - Bougies Naturelles</title>
    <meta name='viewport' content='width=1000, initial-scale=1'>
    <link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
    <link rel="stylesheet" href="<?php echo $path ?>/css/main.css">
</head>

<body>
    <?php require_once './vue/header.php' ?>

    <div class="container">
        <div class="infos">
            <div class="box" id="fr">
                <img src="<?php echo $path ?>/res/img/france.png" alt="Made in France">
                <h4>Fabrication Française</h4>
            </div>
            <div class="box" id="fm">
                <img src="<?php echo $path ?>/res/img/hand-made.png" alt="Fait Main">
                <h4>Fait Main</h4>
            </div>
            <div class="box" id="pg">
                <img src="<?php echo $path ?>/res/img/parfume.png" alt="Parfum">
                <h4>Parfum de Grasse</h4>
            </div>
        </div>
        <div id="presentation">
            <div id="preText">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, officiis neque cumque consectetur optio tempora accusamus fugiat aut sequi facere amet adipisci eaque ipsum natus excepturi impedit possimus libero aliquid!
                    Earum velit quisquam architecto, reprehenderit sequi animi ad necessitatibus enim fuga facere. Eaque iure, delectus hic soluta maxime aspernatur reiciendis consectetur accusamus quos suscipit similique, voluptates ab! Similique, odio earum.
                    Rem vitae voluptas optio officiis animi, consectetur, iusto obcaecati consequuntur distinctio suscipit sit expedita. Tenetur officiis autem commodi nam? Beatae blanditiis totam corrupti nemo, adipisci maxime dolore molestias delectus voluptatibus?
                    Dolor, unde deleniti adipisci voluptatibus omnis quod dignissimos suscipit sed ea a nemo explicabo veniam fugiat, laudantium ipsa officiis corrupti necessitatibus totam. Adipisci explicabo voluptatem facilis blanditiis tempore tempora alias.
                    Numquam, repellat distinctio.</p>
                <div class="button-container">
                    <a href="#" class="button button-wiggle">Qui Sommes Nous ?</a>
                </div>
            </div>

            <div id="preImg">
                <img src="<?php echo $path ?>/res/img/bougies-parfumees-fait-maison.png" width="100%" alt="Fait Main">
            </div>
        </div>
        <br>
        <h1>Notre Sélection</h1>
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">Bougies</div>
                    <div class="numbers">Gourmande</div>
                    <div class="cardName"> </div>
                </div>
                <div class="iconBx">
                    <img src="<?php echo $path ?>/res/img/bougie/bougie_gourmande.png" alt="Bougie Gourmande">
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">Fondants</div>
                    <div class="numbers">Violette</div>
                    <div class="cardName">Un petit retour en Enfance?</div>
                </div>
                <div class="iconBx">
                    <img src="<?php echo $path ?>/res/img/fondant/fondant_violette.png" alt="Fondant Violette">
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">Coffrets</div>
                    <div class="numbers">St.Valentin</div>
                    <div class="cardName">Édition Limité</div>
                </div>
                <div class="iconBx">
                    <img src="<?php echo $path ?>/res/img/bougies.jpg" alt="">
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">Fiole</div>
                    <div class="numbers">Banane</div>
                    <div class="cardName">Idéal pour la Voiture</div>
                </div>
                <div class="iconBx">
                    <img src="<?php echo $path ?>/res/img/fiole/fiole_banane.jpg" alt="Fiole Banane">
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php require_once './vue/avis.php' ?>
    <?php require_once './vue/sur_footer.php' ?>
    <?php require_once './vue/footer.php' ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>

</body>


</html>