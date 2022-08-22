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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/panel_admin.css">
    <link rel="stylesheet" href="../css/produit.css">
    <link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
    <title>OsirisCandles - Produit</title>
</head>

<body>
    <div class="container">
    <?php require_once 'menu_admin.php' ?>

            <div class="article">
                <div id="bougie">
                    <h1><img src="<?php echo $path ?>/res/img/bougies.png"></h1>
                    Bougie
                </div>
                <div id="fondant">
                    <h1><img src="<?php echo $path ?>/res/img/bruleur.png"></h1>
                    Fondant
                </div>
                <div id="fiole">
                    <h1><img src="<?php echo $path ?>/res/img/fiole.png"></h1>
                    Fiole
                </div>
                <div id="coffret">
                    <h1><img src="<?php echo $path ?>/res/img/coffret.png"></h1>
                    Coffret
                </div>
                <div id="resine">
                    <h1><img src="<?php echo $path ?>/res/img/resine.png"></h1>
                    Résine
                </div>
                <div id="brume">
                    <h1><img src="<?php echo $path ?>/res/img/vaporisateur.png"></h1>
                    Brume
                </div>
                <hr>
            </div>

            <!-- BOUGIES -->

            <div class="bougie">
                <button><a href="#form_bougie">
                        <ion-icon size="large" name="add-circle-outline"></ion-icon>
                    </a></button>
                <?php
                $req = $pdo->query('SELECT * FROM bougie ORDER BY nom_bougie ASC');
                foreach ($req as $bougie) { ?>
                    <div class="card">
                        <div id="modif">
                            <form class="modif" name="<?php echo $bougie['id_bougie']; ?>" enctype="multipart/form-data">
                                <input type="hidden" class="id_bougie_<?php echo $bougie['id_bougie']; ?>" name="id_bougie" value="<?php echo $bougie['id_bougie']; ?>">
                                <input class="nom_bougie_<?php echo $bougie['id_bougie']; ?>" type="text" name="nom_bougie" disabled value="<?php echo $bougie['nom_bougie']; ?>">
                                <div class="img_modif">
                                    <img class="preview_img_bougie_1_<?php echo $bougie['id_bougie']; ?>" style="width: 200px" src="<?php echo $path ?>/res/img/bougie/<?php echo $bougie['image_bougie'] ?>">
                                </div>
                                <input class="img_bougie_1_<?php echo $bougie['id_bougie']; ?>" type="file" name="img_bougie_1" disabled>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">gr</div>
                                    <div style="position:absolute;left:2px;top:10px;">Poids</div>
                                    <input class="poids_bougie_<?php echo $bougie['id_bougie']; ?>" type="text" name="poids_bougie" value="<?php echo $bougie['poids_bougie']; ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">€</div>
                                    <div style="position:absolute;left:2px;top:10px;">Prix</div>
                                    <input class="prix_bougie_<?php echo $bougie['id_bougie']; ?>" type="text" name="prix_bougie" value="<?php echo number_format($bougie['prix_bougie'], 2, '.', ''); ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">Qt</div>
                                    <div style="position:absolute;left:2px;top:10px;">Stock</div>
                                    <input class="stock_bougie_<?php echo $bougie['id_bougie']; ?>" type="text" name="stock_bougie" value="<?php echo $bougie['stock_bougie']; ?>" disabled>
                                </div>
                                <button id="valid_<?php echo $bougie['id_bougie']; ?>" type="submit" style="display:none;">
                                    <ion-icon size="large" name="checkmark-outline"></ion-icon>
                                </button>
                                <br>
                                <ion-icon class="modifie" size="large" name="brush-outline"></ion-icon>
                                <ion-icon class="validation" size="large" name="checkmark-outline" style="display:none;"></ion-icon>
                                <ion-icon class="delete" size="large" name="trash-bin-outline"></ion-icon>
                            </form>

                        </div>
                    </div>
                <?php } ?>
                <div id="form_bougie">
                    <form method="POST" action="add_bougie_traitement.php" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td><textarea type="text" name="nom_bougie" id="nom_bougie" placeholder="Référence de la  bougie" rows="12"></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="file" name="ima_bougie" id="img_bougie"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="parfum_bougie" id="parfum_bougie" placeholder="Parfum"></td>
                                <td><input type="text" name="poids_bougie" id="poids_bougie" placeholder="Poids"></td>
                                <td><input type="text" name="prix_bougie" id="prix_bougie" placeholder="Prix"></td>
                                <td><input type="text" name="stock_bougie" id="stock_bougie" placeholder="Stock"></td>
                                <td><input type="text" name="promo_bougie" id="promo_bougie" placeholder="Promo"></td>
                                <td><button type="submit">
                                        <ion-icon size="large" name="paper-plane-outline"></ion-icon>
                                    </button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

            <!-- FONDANT -->

            <div class="fondant" style="display:none;">
                <button><a href="#form_fondant">
                        <ion-icon size="large" name="add-circle-outline"></ion-icon>
                    </a></button>
                <?php
                $req = $pdo->query('SELECT * FROM fondant ORDER BY parfum_fondant ASC');
                foreach ($req as $fondant) { ?>
                    <div class="card">
                        <div id="modif">
                            <form class="modif" name="<?php echo $fondant['id_fondant']; ?>" enctype="multipart/form-data">
                                <input type="hidden" class="id_fondant_<?php echo $fondant['id_fondant']; ?>" name="id_fondant" value="<?php echo $fondant['id_fondant']; ?>">
                                <input class="nom_fondant_<?php echo $fondant['id_fondant']; ?>" type="text" name="nom_fondant" disabled value="<?php echo $fondant['nom_fondant']; ?>">
                                <div class="img_modif">
                                    <img class="preview_img_fondant_1_<?php echo $fondant['id_fondant']; ?>" style="width: 100%" src="<?php echo $path ?>/res/img/fondant/<?php echo $fondant['img_fondant_1'] ?>">
                                </div>
                                <input class="img_fondant_1_<?php echo $fondant['id_fondant']; ?>" type="file" name="img_fondant_1" disabled>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">gr</div>
                                    <div style="position:absolute;left:2px;top:10px;">Poids</div>
                                    <input class="poids_forme_1_<?php echo $fondant['id_fondant']; ?>" type="text" name="poids_forme_1" value="<?php echo $fondant['poids_forme_1']; ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">€</div>
                                    <div style="position:absolute;left:2px;top:10px;">Prix</div>
                                    <input class="prix_forme_1_<?php echo $fondant['id_fondant']; ?>" type="text" name="prix_forme_1" value="<?php echo number_format($fondant['prix_forme_1'], 2, '.', ''); ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">Qt</div>
                                    <div style="position:absolute;left:2px;top:10px;">Stock</div>
                                    <input class="stock_forme_1_<?php echo $fondant['id_fondant']; ?>" type="text" name="stock_forme_1" value="<?php echo $fondant['stock_forme_1']; ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">%</div>
                                    <div style="position:absolute;left:2px;top:10px;">Promo</div>
                                    <input class="promo_fondant_<?php echo $fondant['id_fondant']; ?>" type="text" name="promo_fondant" value="<?php echo $fondant['promo_fondant']; ?>" disabled>
                                </div>
                                <button id="valid_<?php echo $fondant['id_fondant']; ?>" type="submit" style="display:none;">
                                    <ion-icon size="large" name="checkmark-outline"></ion-icon>
                                </button>
                                <br>
                                <ion-icon class="modifie" size="large" name="brush-outline"></ion-icon>
                                <ion-icon class="validation" size="large" name="checkmark-outline" style="display:none;"></ion-icon>
                                <ion-icon class="delete" size="large" name="trash-bin-outline"></ion-icon>
                            </form>

                        </div>
                    </div>
                <?php } ?>
                <div id="form_fondant">
                    <form method="POST" action="add_fondant.php" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td><textarea type="text" name="nom_fondant" id="nom_fondant" placeholder="Référence du fondant" rows="12"></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="file" name="img_fondant_1" id="img_fondant_1"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="parfum_fondant" id="parfum_fondant" placeholder="Parfum"></td>
                                <td><input type="text" name="poids_forme_1" id="poids_forme_1" placeholder="Poids"></td>
                                <td><input type="text" name="prix_forme_1" id="prix_forme_1" placeholder="Prix"></td>
                                <td><input type="text" name="stock_forme_1" id="stock_forme_1" placeholder="Stock"></td>
                                <td><input type="text" name="promo_fondant" id="promo_fondant" placeholder="Promo"></td>
                                <td><button type="submit">
                                        <ion-icon size="large" name="paper-plane-outline"></ion-icon>
                                    </button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

            <!--  Fiole Parfumés -->

            <div class="fiole" style="display:none;">
                <button><a href="#form_fiole">
                        <ion-icon size="large" name="add-circle-outline"></ion-icon>
                    </a></button>
                <?php
                $req = $pdo->query('SELECT * FROM fiole ORDER BY parfum_fiole ASC');
                foreach ($req as $fiole) { ?>
                    <div class="card">
                        <div id="modif">
                            <form class="modif" name="<?php echo $fiole['id_fiole']; ?>" enctype="multipart/form-data">
                                <input type="hidden" class="id_fiole_<?php echo $fiole['id_fiole']; ?>" name="id_fiole" value="<?php echo $fiole['id_fiole']; ?>">
                                <textarea class="nom_fiole_<?php echo $fiole['id_fiole']; ?>" type="text" name="nom_fiole" rows="12" maxlength="300" disabled><?php echo $fiole['nom_fiole']; ?></textarea>
                                <div class="img_modif">
                                    <img class="preview_img_fiole_<?php echo $fiole['id_fiole']; ?>" style="width: 200px" src="<?php echo $path ?>/res/img/fiole/<?php echo $fiole['img_fiole'] ?>">
                                </div>
                                <input class="img_fiole_<?php echo $fiole['id_fiole']; ?>" type="file" name="img_fiole" disabled>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">gr</div>
                                    <div style="position:absolute;left:2px;top:10px;">Poids</div>
                                    <input class="poids_fiole_<?php echo $fiole['id_fiole']; ?>" type="text" name="poids_fiole" value="<?php echo $fiole['poids_fiole']; ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">€</div>
                                    <div style="position:absolute;left:2px;top:10px;">Prix</div>
                                    <input class="prix_fiole_<?php echo $fiole['id_fiole']; ?>" type="text" name="prix_fiole" value="<?php echo number_format($fiole['prix_fiole'], 2, '.', ''); ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">Qt</div>
                                    <div style="position:absolute;left:2px;top:10px;">Stock</div>
                                    <input class="stock_fiole_<?php echo $fiole['id_fiole']; ?>" type="text" name="stock_fiole" value="<?php echo $fiole['stock_fiole']; ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">%</div>
                                    <div style="position:absolute;left:2px;top:10px;">Promo</div>
                                    <input class="promo_fiole_<?php echo $fiole['id_fiole']; ?>" type="text" name="promo_fiole" value="<?php echo $fiole['promo_fiole']; ?>" disabled>
                                </div>
                                <button id="valid_<?php echo $fiole['id_fiole']; ?>" type="submit" style="display:none;">
                                    <ion-icon size="large" name="checkmark-outline"></ion-icon>
                                </button>
                                <br>
                                <ion-icon class="modif" size="large" name="brush-outline"></ion-icon>
                                <ion-icon class="validation" size="large" name="checkmark-outline" style="display:none;"></ion-icon>
                                <ion-icon class="delete" size="large" name="trash-bin-outline"></ion-icon>
                            </form>

                        </div>
                    </div>
                <?php } ?>
                <div id="form_fiole">
                    <form method="POST" action="add_fiole_traitement.php" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td><textarea type="text" name="nom_fiole" id="nom_fiole" placeholder="Référence de la fiole" rows="12"></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="file" name="ima_fiole" id="img_fiole"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="parfum_fiole" id="parfum_fiole" placeholder="Parfum"></td>
                                <td><input type="text" name="poids_fiole" id="poids_fiole" placeholder="Poids"></td>
                                <td><input type="text" name="prix_fiole" id="prix_fiole" placeholder="Prix"></td>
                                <td><input type="text" name="stock_fiole" id="stock_fiole" placeholder="Stock"></td>
                                <td><input type="text" name="promo_fiole" id="promo_fiole" placeholder="Promo"></td>
                                <td><button type="submit">
                                        <ion-icon size="large" name="paper-plane-outline"></ion-icon>
                                    </button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

            <!-- COFFRETS -->

            <div class="coffret" style="display:none;">
                <div class="card">
                    <div class="sur" style="position:relative;">
                        <div style="position:absolute;left:2px;top:10px;">Nom :</div>
                        <input type="text" value="Fondant Fraise des Bois" disabled></input>
                    </div>
                    <div class="card_img"><img src="<?php echo $path ?>/res/img/fondant/fondant_coeur_fraise_des_bois.png" alt="Fondant Fraise des Bois "></div>
                    <hr>
                    <div class="sur" style="position:relative;">
                        <div style="position:absolute;left:2px;top:10px;">Parfum :</div>
                        <input type="text" value="Fraise des Bois" disabled></input>
                    </div>
                    <div class="sur" style="position:relative;">
                        <div style="position:absolute;right:5px;top:10px;">gr</div>
                        <div style="position:absolute;left:2px;top:10px;">Poids :</div>
                        <input type="text" value="16" disabled></input>
                    </div>
                    <div class="sur" style="position:relative;">
                        <div style="position:absolute;left:2px;top:10px;">Stock :</div>
                        <input type="text" value="5" disabled></input>
                    </div>
                    <div class="sur" style="position:relative;">
                        <div style="position:absolute;right:5px;top:10px;">€/u</div>
                        <div style="position:absolute;left:2px;top:10px;">Prix :</div>
                        <input type="text" value="2€/u" disabled></input>
                    </div>
                    <br>
                    <ion-icon class="modif" size="large" name="brush-outline"></ion-icon>
                    <ion-icon class="validation" size="large" name="checkmark-outline" style="display:none;"></ion-icon>
                    <ion-icon class="delete" size="large" name="trash-bin-outline"></ion-icon>
                </div>
            </div>

            <!-- FLOTTANTES -->

            <!-- BRUME -->

            <div class="brume" style="display:none;">
                <button><a href="#form_brume">
                        <ion-icon size="large" name="add-circle-outline"></ion-icon>
                    </a></button>
                <?php
                $req = $pdo->query('SELECT * FROM brume_parfume ORDER BY parfum_brume ASC');
                foreach ($req as $brume) { ?>
                    <div class="card">
                        <div id="modif">
                            <form class="modif" name="<?php echo $brume['id_brume']; ?>" enctype="multipart/form-data">
                                <input type="hidden" class="id_brume_<?php echo $brume['id_brume']; ?>" name="id_brume" value="<?php echo $brume['id_brume']; ?>">
                                <input class="nom_brume_<?php echo $brume['id_brume']; ?>" type="text" name="nom_brume" disabled value="<?php echo $brume['nom_brume']; ?>">
                                <div class="img_modif">
                                    <img class="preview_img_brume_<?php echo $brume['id_brume']; ?>" style="width: 200px" src="<?php echo $path ?>/res/img/brume/<?php echo $brume['img_brume'] ?>">
                                </div>
                                <input class="img_brume_<?php echo $brume['id_brume']; ?>" type="file" name="img_brume" disabled>
                                <p>50ml</p>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">gr</div>
                                    <div style="position:absolute;left:2px;top:10px;">Poids</div>
                                    <input class="poids_brume_50_<?php echo $brume['id_brume']; ?>" type="text" name="poids_brume_50" value="<?php echo $brume['poids_brume_50']; ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">€</div>
                                    <div style="position:absolute;left:2px;top:10px;">Prix</div>
                                    <input class="prix_brume_50_<?php echo $brume['id_brume']; ?>" type="text" name="prix_brume_50" value="<?php echo number_format($brume['prix_brume_50'], 2, '.', ''); ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">Qt</div>
                                    <div style="position:absolute;left:2px;top:10px;">Stock</div>
                                    <input class="stock_brume_50_<?php echo $brume['id_brume']; ?>" type="text" name="stock_brume_50" value="<?php echo $brume['stock_brume_50']; ?>" disabled>
                                </div>
                                <p>80ml</p>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">gr</div>
                                    <div style="position:absolute;left:2px;top:10px;">Poids</div>
                                    <input class="poids_brume_80_<?php echo $brume['id_brume']; ?>" type="text" name="poids_brume_80" value="<?php echo $brume['poids_brume_80']; ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">€</div>
                                    <div style="position:absolute;left:2px;top:10px;">Prix</div>
                                    <input class="prix_brume_80_<?php echo $brume['id_brume']; ?>" type="text" name="prix_brume_80" value="<?php echo number_format($brume['prix_brume_80'], 2, '.', ''); ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">Qt</div>
                                    <div style="position:absolute;left:2px;top:10px;">Stock</div>
                                    <input class="stock_brume_80_<?php echo $brume['id_brume']; ?>" type="text" name="stock_brume50_" value="<?php echo $brume['stock_brume_80']; ?>" disabled>
                                </div>
                                <p>100ml</p>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">gr</div>
                                    <div style="position:absolute;left:2px;top:10px;">Poids</div>
                                    <input class="poids_brume_100_<?php echo $brume['id_brume']; ?>" type="text" name="poids_brume_100" value="<?php echo $brume['poids_brume_100']; ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">€</div>
                                    <div style="position:absolute;left:2px;top:10px;">Prix</div>
                                    <input class="prix_brume_100_<?php echo $brume['id_brume']; ?>" type="text" name="prix_brume_100" value="<?php echo number_format($brume['prix_brume_100'], 2, '.', ''); ?>" disabled>
                                </div>
                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">Qt</div>
                                    <div style="position:absolute;left:2px;top:10px;">Stock</div>
                                    <input class="stock_brume_100_<?php echo $brume['id_brume']; ?>" type="text" name="stock_brume_100" value="<?php echo $brume['stock_brume_100']; ?>" disabled>
                                </div>

                                <div style="position:relative;">
                                    <div style="position:absolute;right:5px;top:10px;">%</div>
                                    <div style="position:absolute;left:2px;top:10px;">Promo</div>
                                    <input class="promo_brume_<?php echo $brume['id_brume']; ?>" type="text" name="promo_brume" value="<?php echo $brume['promo_brume']; ?>" disabled>
                                </div>
                                <button id="valid_<?php echo $brume['id_brume']; ?>" type="submit" style="display:none;">
                                    <ion-icon size="large" name="checkmark-outline"></ion-icon>
                                </button>
                                <br>
                                <ion-icon class="modif" size="large" name="brush-outline"></ion-icon>
                                <ion-icon class="validation" size="large" name="checkmark-outline" style="display:none;"></ion-icon>
                                <ion-icon class="delete" size="large" name="trash-bin-outline"></ion-icon>
                            </form>

                        </div>
                    </div>
                <?php } ?>
                <div id="form_brume">
                    <form method="POST" action="add_brume_traitement.php" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td><textarea type="text" name="nom_brume" id="nom_brume" placeholder="Référence de la brume" rows="12"></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="file" name="ima_brume" id="img_brume"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="parfum_brume" id="parfum_brume" placeholder="Parfum"></td>
                                <td><input type="text" name="poids_brume_50" id="poids_brume" placeholder="Poids 50ml"></td>
                                <td><input type="text" name="prix_brume_50" id="prix_brume" placeholder="Prix 50ml"></td>
                                <td><input type="text" name="stock_brume_50" id="stock_brume" placeholder="Stock 50ml"></td>
                                <td><input type="text" name="promo_brume" id="promo_brume" placeholder="Promo"></td>
                                <td><button type="submit">
                                        <ion-icon size="large" name="paper-plane-outline"></ion-icon>
                                    </button></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="text" name="poids_brume_80" id="poids_brume" placeholder="Poids 80ml"></td>
                                <td><input type="text" name="prix_brume_80" id="prix_brume" placeholder="Prix 80ml"></td>
                                <td><input type="text" name="stock_brume_80" id="stock_brume" placeholder="Stock 80ml"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="text" name="poids_brume_100" id="poids_brume" placeholder="Poids 100ml"></td>
                                <td><input type="text" name="prix_brume_100" id="prix_brume" placeholder="Prix 100ml"></td>
                                <td><input type="text" name="stock_brume_100" id="stock_brume" placeholder="Stock 100ml"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <button><a href="#bougie">
                    <ion-icon size="large" name="arrow-up"></ion-icon>
                </a></button>



            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script src="../js/jquery-3.6.0.min.js"></script>
            <script src="../js/panel_admin.js"></script>
            <script src="../js/produit.js"></script>
</body>

</html>