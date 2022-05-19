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

    <div id="container_panier">
        <div id="panier_title">
            <h1>Votre Panier</h1>
        </div>
        <div id="panier_content">
            <table>
                <thead>
                    <tr>
                        <td>Nom du produit</td>
                        <td>Quantité</td>
                        <td>Prix / u</td>
                        <td>Poids</td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <hr>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       $prixs = 0;
                    if (isset($_SESSION['nb_panier'])) {
                        for ($i = 1; $i <= $_SESSION['nb_panier']; $i++) {
                            if (isset($_SESSION['panier']['article' . $i]) == 0) {
                                continue;
                            }
                            echo "
                                
                                <tr>
                                <td>
                                    <div>
                                        <img style='vertical-align:middle' src='../res/img/" . $_SESSION['panier']['article' . $i]['img'] . "'>
                                        <span>" . $_SESSION['panier']['article' . $i]['nom'] . "</span>
                                    </div>
                                </td>
                                <td>" . $_SESSION['panier']['article' . $i]['quantite'] . "</td>
                                <td>" . $_SESSION['panier']['article' . $i]['prix'] . " €</td>
                                <td>" . $_SESSION['panier']['article' . $i]['poids'] . " gr</td>
                                <td id='delete_img'>
                                <form action='../bdd/del_panier.php' method='POST'>
                                <button>
                                    <ion-icon name='trash-outline'></ion-icon>
                                    </button>
                                    <input type='hidden' value='article" . $i . "' name='article'>
                                    </form>
                                </td>
                            </tr>
                            
                                
                                ";
                            $prixs = $prixs + $_SESSION['panier']['article' . $i]['prix'] * $_SESSION['panier']['article' . $i]['quantite']; // Calcul du prix
                        }
                    }


                    ?>
                    <tr>
                        <td colspan="5">
                            <hr>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div id="total_panier">
                <h1>Total: <b><?php echo $prixs ?>€</b></h1>
            </div>

            <div>
                <button id="valid_panier">Valider le panier</button>
            </div>
        </div>
        <div id="action">
            <form method="POST" action="../bdd/clear_panier.php" style="display: contents;">
                <input type="hidden" value="true" name="clear_panier">
                <button id="clear_panier">Vider le Panier</button>
            </form>

            <button id="rajout"><a href="<?php echo $path ?>/index.php">Continuer mes Achats</a></button>
        </div>
    </div>

    <?php require_once '../vue/footer.php' ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>

</body>

</html>