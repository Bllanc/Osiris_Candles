<?php
session_start();

require_once('connect_inc.php');

if (isset($_POST['connex_mail_utilisateur']) && !empty($_POST['connex_mail_utilisateur'])) {
    $mail_utilisateur = $_POST['connex_mail_utilisateur'];
} else {
    exit(header('Location: login.php?error_mail=Mail Incorrect'));
}

if (isset($_POST['connex_motdepasse']) && !empty($_POST['connex_motdepasse'])) {
    $motdepasse = $_POST['connex_motdepasse'];
} else {
    exit(header('Location: login.php?error_motdepasse=Mot de passe Incorrect'));
}

foreach ($pdo->query("SELECT * FROM utilisateur WHERE 1") as $client) {
    if ($_POST['connex_mail_utilisateur'] == $client['mail_utilisateur']) {
        if (password_verify($motdepasse, $client['motdepasse'])) {
            header('Location: ../index.php');
            $_SESSION["id_utilisateur"] = $client['id_utilisateur'];
            $_SESSION["mail_utilisateur"] = $client['mail_utilisateur'];
            $_SESSION["nom_utilisateur"] = $client['nom_utilisateur'];
            $_SESSION["prenom_utilisateur"] = $client['prenom_utilisateur'];
            $_SESSION["tel_utilisateur"] = $client['tel_utilisateur'];
            $_SESSION["adresse_utilisateur"] = $client['adresse_utilisateur'];
            $_SESSION["user_img"] = $client['user_img'];
            $_SESSION["code_postal"] = $client['code_postal'];
            $_SESSION["ville"] = $client['ville'];
            $_SESSION["pays"] = $client['pays'];
            $_SESSION["fidelite"] = $client['fidelite'];
            if ($client['admin'] == 1) {
                $_SESSION['admin'] = 1;
            }
            exit;
        } else {
            header('Location: login.php?error_motdepasse=Mot de passe incorrect');
        }
    } else {
        header('Location: login.php?error_mail=Mail incorrect');
    }
}
