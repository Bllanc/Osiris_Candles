<?php
session_start();
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/OsirisCandles";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Osiris Candles - Panier</title>
    <meta name='viewport' content='width=1000, initial-scale=1'>
    <link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
    <link rel="stylesheet" href="../css/panier.css">

</head>


<body>

    <?php require_once '../vue/header.php' ?>
    <div id="panier_title">
        <h1>Récapitulatif de mon Panier</h1>
    </div>
    <section id="main_panier">
        <div id="container_panier">
            <div id="panier_content">
                <?php
                $prixs = 0;
                if (isset($_SESSION['nb_panier'])) {
                    for ($i = 1; $i <= $_SESSION['nb_panier']; $i++) {
                        if (isset($_SESSION['panier']['article' . $i]) == 0) {
                            continue;
                        }
                        echo "<div class='article'>
                            <div>
                                <img src='../res/img/" . $_SESSION['panier']['article' . $i]['img'] . "'>
                            </div>
                            <div>
                                <span>" . $_SESSION['panier']['article' . $i]['nom'] . "</span>
                                <p>" . $_SESSION['panier']['article' . $i]['prix'] . " €</p>
                            </div>
                            <div  id='qte' style='display:flex;'>
                                <p id=''compteur>" . $_SESSION['panier']['article' . $i]['quantite'] . "</p>
                                <div>
                                    <div>
                                        <button class='plus' type='text'>
                                            <ion-icon name='caret-up-outline'></ion-icon>
                                        </button>
                                     </div>
                                    <div>
                                        <button class='moins' type='text'>
                                            <ion-icon name='caret-down-outline'></ion-icon>
                                        </button>
                                         </div>
                                </div>
                            </div>
                            <div>
                                <p>" . $_SESSION['panier']['article' . $i]['prix'] *  $_SESSION['panier']['article' . $i]['quantite'] . " €</p>
                            </div>
                            <div>
                                <form action='../bdd/del_panier.php' method='POST'>
                                    <button>
                                        <ion-icon size='large' name='trash-outline'></ion-icon>
                                    </button>
                                        <input type='hidden' value='article" . $i . "' name='article'>
                                </form>
                            </div>
                            </div>
                            ";

                        $prixs = $prixs + $_SESSION['panier']['article' . $i]['prix'] * $_SESSION['panier']['article' . $i]['quantite']; // Calcul du prix
                    }
                }
                ?>
                <div id="action">
                    <form method="POST" action="../bdd/clear_panier.php" style="display: contents;">
                        <input type="hidden" value="true" name="clear_panier">
                        <button id="clear_panier">Vider le Panier</button>
                    </form>
                </div>
            </div>

            <div id="infos_panier">
                <div id="total_panier">
                    <div class="prxs">
                        <div>
                            <h4>Produit : </h4>
                        </div>
                        <div> <?php echo $prixs ?> €</div>
                    </div>
                    <div class="prxs">
                        <div>
                            <h4>Livraison : </h4>
                        </div>
                        <div> <?php echo 0 ?> €</div>
                    </div>
                    <div style="display: flex; justify-content:flex-end; margin-top:15%;">
                        <h1>Total: <b><?php echo $prixs ?>€</b></h1>
                    </div>
                    <div>
                        <button style="display: flex; justify-content:center;" id="valid_panier">Valider le panier</button>
                    </div>
                </div>


                <div id="contact">

                    <a href="<?php echo $path ?>/controleur/contact.php">Un Probléme ? Contactez-Nous</a>
                </div>
                <div id="info">
                    <p>
                        <ion-icon size="large" name="card-outline"></ion-icon> Paiement Sécurisé.
                    </p>
                    <p>
                        <ion-icon size="large" name="calendar-number-outline"></ion-icon> Expédié en 48h Maximum.
                    </p>
                    <p></p>
                </div>
            </div>

    </section>

    <div id="rajout">
        <button><a href="<?php echo $path ?>/index.php">Continuer mes Achats</a></button>
    </div>

    </div>

    <?php require_once '../vue/footer.php' ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $path ?>/js/panier.js"></script>

</body>

</html>