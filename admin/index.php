<?php
session_start();
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

<body>


    <div class="container">
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
                            <ion-icon name="newspaper-outline"></ion-icon>
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

            <div class="cardBox">
                <div class="card" id="articles">
                    <div>
                        <div class="numbers" id="articles"><?php $bougie = $pdo->prepare("SELECT * FROM bougie");
                                                            $bougie->execute();
                                                            $fiole = $pdo->prepare("SELECT * FROM fiole");
                                                            $fiole->execute();
                                                            $fondant = $pdo->prepare("SELECT * FROM fondant");
                                                            $fondant->execute();
                                                            $brume = $pdo->prepare("SELECT * FROM brume_parfume");
                                                            $brume->execute();
                                                            echo $bougie->rowCount() + $fiole->rowCount();
                                                            +$fondant->rowCount();
                                                            +$brume->rowCount(); ?>
                        </div>
                        <div class="cardName">Articles</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="medkit-outline"></ion-icon>
                    </div>
                </div>
                <div class="card" id="clients">
                    <div>
                        <div class="numbers" id="clients"><?php $client = $pdo->prepare("SELECT * FROM utilisateur");
                                                            $client->execute();
                                                            echo $client->rowCount(); ?></div>
                        <div class="cardName">Clients</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>
                <div class="card" id="comms">
                    <div>
                        <!--<div class="numbers" id="comms"><?php $comms = $pdo->prepare("SELECT * FROM commentaire");
                                                            $comms->execute();
                                                            echo $comms->rowCount(); ?></div>
                        <div class="cardName">Commentaires</div>-->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Gains</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Commandes</h2>
                        <a href="" class="btn">Tout Voir</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Nom</td>
                                <td>Prix</td>
                                <td>Paiement</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fondant x 5</td>
                                <td>10.00€</td>
                                <td>Payé</td>
                                <td><span class="status delivered">Livrer</span></td>
                            </tr>
                            <tr>
                                <td>Bougies Deco Citrouille</td>
                                <td>4.32€</td>
                                <td>Non-Payé</td>
                                <td><span class="status pending">En attente</span></td>
                            </tr>
                            <tr>
                                <td>Bougies Deco Tête de Mort</td>
                                <td>3.35€</td>
                                <td>Payé</td>
                                <td><span class="status return">Retour</span></td>
                            </tr>
                            <tr>
                                <td>Bougie Deco Araignée Parfumé</td>
                                <td>5.10€</td>
                                <td>Non-Payé</td>
                                <td><span class="status inprogress">En cours</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="recentFacture">
                    <div class="cardHeader">
                        <h2>Facture</h2>
                    </div>
                    <table>
                        <tr>
                            <td width="60px">
                                <div>
                                    <p>Facture du 22/10/2021</p>
                                </div>
                            </td>
                            <td>
                                <h4>Jean Bonbeurre</h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div>
                                    <p>Facture du 21/10/2021</p>
                                </div>
                            </td>
                            <td>
                                <h4>Jean Bonbeurre</h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div>
                                    <p>Facture du 20/10/2021</p>
                                </div>
                            </td>
                            <td>
                                <h4>Jean Bonbeurre</h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div>
                                    <p>Facture du 19/10/2021</p>
                                </div>
                            </td>
                            <td>
                                <h4>Jean Bonbeurre</h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div>
                                    <p>Facture du 18/10/2021</p>
                                </div>
                            </td>
                            <td>
                                <h4>Jean Bonbeurre</h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div>
                                    <p>Facture du 17/10/2021</p>
                                </div>
                            </td>
                            <td>
                                <h4>Jean Bonbeurre</h4>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../js/panel_admin.js"></script>

</body>