<?php
session_start();
require_once('connect_inc.php'); //Connexion a la bdd
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
    <title>Osiris Candles - Connexion / Inscription</title>
    <meta name='viewport' content='width=1000, initial-scale=1'>
    <link rel="icon" href="<?php echo $path ?>/res/img/osiris_candles.ico" />
    <link rel="stylesheet" href="<?php echo $path ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo $path ?>/css/login.css">
</head>

<body>
    <?php require_once '../vue/header.php' ?>

    <div class="container">
        <div id="conn">
            <h1>Connexion</h1>
            <form method="POST" action="connexion_traitement.php">
                <table>
                    <tr>
                        <td><label>Email :</label></td>
                        <td><input type="mail" name="connex_mail_utilisateur" placeholder="exemple@monmail.com"></td>
                        <td style="color: red;">
                            <?php
                                if(isset($_GET['error_mail'])) { 
                                    echo $_GET['error_mail'];
                                }; 
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Mot de passe :</label></td>
                        <td><input type="password" name="connex_motdepasse"></td>
                        <td style="color: red;">
                            <?php 
                                if(isset($_GET['error_motdepasse'])) { 
                                    echo $_GET['error_motdepasse'];
                                }; 
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><input class="send send-wiggle" type="submit" value="Se connecter"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div id="insc">
            <h1>Inscription</h1>
            <form method="POST" action="inscription_traitement.php">
                <table>
                    <tr>
                        <td><label>Nom :</label></td>
                        <td><input type="text" name="inscr_nom_utilisateur"></td>
                    </tr>
                    <tr>
                        <td><label>Prenom :</label></td>
                        <td><input type="text" name="inscr_prenom_utilisateur"></td>
                    </tr>
                    <tr>
                        <td><label>Email :</label></td>
                        <td><input type="mail" name="inscr_mail_confirme"></td>
                    </tr>
                    <tr>
                        <td><label>Confirmation email :</label></td>
                        <td><input type="mail" name="inscr_confirm_mail_utilisateur"></td>
                    </tr>
                    <tr>
                        <td><label>Mot de passe :</label></td>
                        <td><input type="password" name="inscr_motdepasse"></td>
                    </tr>
                    <tr>
                        <td><label>Confirmation de mot de passe :</label></td>
                        <td><input type="password" name="inscr_confirm_motdepasse"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php if (isset($_SESSION['inscript_error'])) {
                            echo '<p style="color: red;">'.$_SESSION['inscript_error'].'</p>';
                            session_unset($_SESSION['inscript_error']);
                        } else if (isset($_SESSION['inscript_message'])) {
                            echo '<p style="color: green;">'.$_SESSION['inscript_message'].'</p>';
                            session_unset($_SESSION['inscript_message']);
                        }?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="send send-wiggle" type="submit" value="S'inscrire"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <?php require_once '../vue/footer.php' ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script src="<?php echo $path ?>/js/jquery-3.6.0.min.js"></script>

</body>


</html>