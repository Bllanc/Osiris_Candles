<?php
session_start();
require_once '../bdd/connect_inc.php';
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/OsirisCandles";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Osiris Candles - Mon Compte </title>
    <meta name='viewport' content='width=1000, initial-scale=1'>
    <link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="<?php echo $path ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo $path ?>/css/mon_compte.css">
</head>

<body>
    <?php require_once '../vue/header.php' ?>

    <div class="modal" id="modal_avatar" style="display:none;">
        <?php foreach ($pdo->query("SELECT * FROM `avatar` WHERE 1") as $key => $row) {
            echo "<img class='change_avatar_click' name='" . $row['img_avatar'] . "' src='" . $path . "/res/img/avatar/" . $row['img_avatar'] . "' alt='Avatar'>";
        }
        ?>
    </div>

    <div class="user">
        <img class='avatar' src="<?php echo $path ?>/res/img/avatar/<?php echo $_SESSION['user_img'] ?>" alt="">
        <ion-icon id="change_avatar" size="large" name="brush"></ion-icon>
        <h2><?php if (isset($_SESSION['admin'])) {
                echo "Super Admin";
            } else {
                echo "Client";
            }; ?> </h2>
        <div class="infos_user">
            <ul>
                <?php if (isset($_SESSION['admin'])) {
                    echo " <li id='admin'><a href='" . $path . "/admin/index.php'>Pannel Admin</a></li>";
                } else {
                    echo "";
                }; ?>

                <li id="tab_bord">Tableau de bord</li>
                <li id="infos_compte">Informations du compte</li>
                <li id="adresse">Carnet d'adresse</li>
                <li>Mes Commandes</li>
                <li id="fidel">Fidélité</li>
                <form action="../bdd/deco_traitement.php">
                    <li><input type="submit" value="Déconnexion" id="decon"></input></li>
                </form>
            </ul>
        </div>
        <!-- DEBUT TABLEAU DE BORD -->

        <div class="content_user" id="bord">
            <h3>Bonjour, <?php echo $_SESSION['prenom_utilisateur'] ?> !</h3>
            <br>
            <p>Depuis le tableau de bord, vous pouvez avoir un aperçu de vos commandes et mettre à jour les informations de votre compte.</p>
            <br>
            <br>
            <br>
            <p><strong>INFORMATIONS DU COMPTE</strong><i id="edit">Éditer</i></p>
            <hr style="width:100%; margin:2% auto;">
            <p><?php echo $_SESSION['prenom_utilisateur'] . " " . $_SESSION['nom_utilisateur']; ?></p>
            <br>
            <p><?php echo $_SESSION['mail_utilisateur']; ?></p>
            <br>
            <i><a href="#" id="modifmdp">Modifier le mot de passe </i></a>
            <form action="../bdd/change_mdp_traitement.php" style="display: none; width: fit-content;" id="changemdp" method="POST">
                <p>Ancien mot de passe</p>
                <input type="password" name="old_mdp">
                <p>Nouveau mot de passe</p>
                <input type="password" name="new_mdp1">
                <p>Verification mot de passe</p>
                <input type="password" name="new_mdp2">
                <br>
                <div style="text-align: center;">
                    <input type="submit" value="Valider" id="changemdp_button">
                </div>
            </form>
            <hr style="width:100%; margin:2% auto;">
            <br>
            <br>
            <p><strong>CARNET D'ADRESSES</strong><i id="edit_adr">Gérer les Adresses</i></p>
            <hr style="width:100%; margin:2% auto;">
            <div id="livr_fact">
                <table id="facturation">
                    <tr>
                        <td><strong>ADRESSES DE FACTURATION :</strong></td>
                    </tr>
                    <?php if (isset($_SESSION['adresse_utilisateur'])) {
                        echo "<tr><td>" . $_SESSION['adresse_utilisateur'] . ",</td></tr>";
                        echo "<tr><td>" . $_SESSION['code_postal'] . "</td></tr>";
                        echo "<tr><td>" . $_SESSION['ville'] . "</td></tr>";
                    } else {
                        echo "<tr><td>Vous n'avez pas spécifié d'adresse de facturation.</td></tr>";
                    } ?>
                </table>
                <table id="livraison">
                    <tr>
                        <td><strong>ADRESSE DE LIVRAISON :</strong></td>
                    </tr>
                    <?php if (isset($_SESSION['adresse_utilisateur'])) {
                        echo "<tr><td>" . $_SESSION['adresse_utilisateur'] . ",</td></tr>";
                        echo "<tr><td>" . $_SESSION['code_postal'] . "</td></tr>";
                        echo "<tr><td>" . $_SESSION['ville'] . "</td></tr>";
                    } else {
                        echo "<tr><td>Vous n'avez pas spécifié d'adresse de livraison.</td></tr>";
                    } ?>
                </table>
            </div>
        </div>

        <!-- DEBUT INFORAMTIONS DU COMPTE -->

        <form action="../bdd/edit_info.php" method="POST">
            <div class="content_user" id="info_compte" style="display: none;">
                <h3>Éditer les Informations du Compte </h3>
                <br>
                <table id="civilite_utilisateur">
                    <tr>
                        <td>Nom d'utilisateur<span>*</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="utilisateur" placeholder="Jean" value="<?php echo $_SESSION['prenom_utilisateur']; ?>" disabled></td>
                    </tr>
                    <tr>
                        <td>Civilité</td>
                        <td>Prénom</td>
                        <td>Nom</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="civilite_utilisateur" id="">
                                <option value="Monsieur" <?php if (isset($_SESSION['civilite_utilisateur']) && $_SESSION['civilite_utilisateur'] == "Monsieur") {
                                                                echo "selected";
                                                            } ?>>Monsieur</option>
                                <option value="Madame" <?php if (isset($_SESSION['civilite_utilisateur']) && $_SESSION['civilite_utilisateur'] == "Madame") {
                                                            echo "selected";
                                                        } ?>>Madame</option>
                                <option value="Autre" <?php if (isset($_SESSION['civilite_utilisateur']) && $_SESSION['civilite_utilisateur'] == "Autre") {
                                                            echo "selected";
                                                        } ?>>Autre</option>
                            </select>
                        </td>
                        <td><input <?php if (isset($_SESSION['prenom_utilisateur'])) {
                                        echo "value='" . $_SESSION['prenom_utilisateur'] . "'";
                                    } ?> name="prenom_utilisateur" type="text"></td>
                        <td><input <?php if (isset($_SESSION['nom_utilisateur'])) {
                                        echo "value='" . $_SESSION['nom_utilisateur'] . "'";
                                    } ?> name='nom_utilisateur' type="text"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>Adresse Mail<span>*</span>
                        <td>
                    </tr>
                    <tr>
                        <td><input type="mail" name="mail_utilisateur" placeholder="exemple@gmail.com" value="<?php echo $_SESSION['mail_utilisateur']; ?>" disabled></td>
                    </tr>
                    <tr>
                        <td>
                            <i><a href="#">Modifier le mot de Passe</a></i>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="obligatoire" style="text-align:right; margin: 2% auto; width:80% ">
                <span>* Champs Obligatoire</span>
            </div>
            <div id="btn_action">
                <button id="retour1" style="display:none;">
                    < Retour</button>
                        <button id="save" style="display:none;">Sauvegarder</button>
            </div>
        </form>

        <!-- DEBUT CARNET D'ADRESSES -->

        <form action="../bdd/edit_add.php" method="POST">
            <div class="content_user" id="carnet_adresse" style="display:none;">
                <h3>Ajouter une Nouvelle Adresse </h3>
                <hr style="width:100%; margin:2% auto;">
                <h4>Informations de Contact</h4>
                <br>
                <table id="civilite_utilisateur">
                    <tr>
                        <td>Civilité<span>*</span></td>
                        <td>Prénom<span>*</span></td>
                        <td>Nom<span>*</span>
                        <td>
                    </tr>
                    <tr>
                        <td>
                            <select name="civilite_utilisateur" id="">
                                <option value="Monsieur" <?php if (isset($_SESSION['civilite_utilisateur']) && $_SESSION['civilite_utilisateur'] == "Monsieur") {
                                                                echo "selected";
                                                            } ?>>Monsieur</option>
                                <option value="Madame" <?php if (isset($_SESSION['civilite_utilisateur']) && $_SESSION['civilite_utilisateur'] == "Madame") {
                                                            echo "selected";
                                                        } ?>>Madame</option>
                                <option value="Autre" <?php if (isset($_SESSION['civilite_utilisateur']) && $_SESSION['civilite_utilisateur'] == "Autre") {
                                                            echo "selected";
                                                        } ?>>Autre</option>
                            </select>
                        </td>
                        <td><input <?php if (isset($_SESSION['prenom_utilisateur'])) {
                                        echo "value='" . $_SESSION['prenom_utilisateur'] . "'";
                                    } ?> name="prenom_utilisateur" type="text"></td>
                        <td><input <?php if (isset($_SESSION['nom_utilisateur'])) {
                                        echo "value='" . $_SESSION['nom_utilisateur'] . "'";
                                    } ?> name='nom_utilisateur' type="text"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>Téléphone<span>*</span></td>
                    </tr>
                    <tr>
                        <td><input <?php if (isset($_SESSION['tel_utilisateur'])) {
                                        echo "value='" . $_SESSION['tel_utilisateur'] . "'";
                                    } ?> name="tel_utilisateur" type="text"></td>
                    </tr>
                </table>
                <hr style="width:100%; margin:2% auto;">
                <h4>Adresse</h4>
                <br>
                <table>
                    <tr>
                        <td>Adresse<span>*</span>
                        <td>
                    </tr>
                    <tr>
                        <td><input <?php if (isset($_SESSION['adresse_utilisateur'])) {
                                        echo "value='" . $_SESSION['adresse_utilisateur'] . "'";
                                    } ?> name="adresse_utilisateur" type="text" required></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>Code postal<span>*</span>
                        </td>
                        <td>Ville<span>*</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input <?php if (isset($_SESSION['code_postal'])) {
                                        echo "value='" . $_SESSION['code_postal'] . "'";
                                    } ?> name="code_postal" type="text" required></td>
                        <td><input <?php if (isset($_SESSION['ville'])) {
                                        echo "value='" . $_SESSION['ville'] . "'";
                                    } ?> name="ville" type="text" required></td>
                    </tr>
                    <tr>
                        <td>Pays<span>*</span>
                        <td>
                    </tr>
                    <tr>
                        <td>
                            <select name="pays" id="">
                                <option value="France" <?php if (isset($_SESSION['pays']) && $_SESSION['pays'] == "France") {
                                                            echo "selected";
                                                        } ?>>France</option>
                            </select>
                        </td>
                    </tr>
                </table>
                </table>
            </div>
            <div id="obligatoire2" style="text-align:right; margin: 2% auto; width:80%; display:none;">
                <span>* Champs Obligatoire</span>
            </div>
            <div id="btn_action">
                <button id="retour2" style="display:none;">
                    < Retour</button>
                        <button id="save2" style="display:none;">Sauvegarder l'adresse</button>
            </div>
        </form>

        <!-- DEBUT FIDELITE-->

        <div class="content_user" id="fidelite" style="display:none;">
            <h3>Vos Points de Fidélité</h3>
            <br>
            <p>Vous disposez actuellement de : <?php echo "<strong>" . $_SESSION['fidelite'] . "</strong>/200"; ?> points de Fidélité </p>
        </div>
        <div id="btn_action">
            <button id="retour4" style="display:none;">
                < Retour</button>
        </div>
    </div>

    <?php require_once '../vue/footer.php' ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="<?php echo $path ?>/js/mon_compte.js"></script>
</body>