<?php
session_start();
require_once('connect_inc.php');

if (isset($_POST['inscr_mail_confirme']) && !empty($_POST['inscr_mail_confirme'])) {
    $mail_utilisateur = $_POST['inscr_mail_confirme'];
}
else{
    exit(header('Location: login.php'));
}

if (isset($_POST['inscr_motdepasse']) && !empty($_POST['inscr_motdepasse'])) {
    $motdepasse = $_POST['inscr_motdepasse'];
}
else{
    exit(header('Location: login.php'));
}

if (isset($_POST['inscr_prenom_utilisateur']) && !empty($_POST['inscr_prenom_utilisateur'])) {
    $prenom_utilisateur = $_POST['inscr_prenom_utilisateur'];
}
else{
    exit(header('Location: login.php'));
}

if (isset($_POST['inscr_nom_utilisateur']) && !empty($_POST['inscr_nom_utilisateur'])) {
    $nom_utilisateur = $_POST['inscr_nom_utilisateur'];
}
else{
    exit(header('Location: login.php'));
}

foreach ($pdo->query("SELECT * FROM `utilisateur` WHERE `mail_utilisateur` = '".$mail_utilisateur."'") as $client) {
    $_SESSION['inscript_error'] = "Email déjà existante";
    exit(header('Location: login.php'));
}

$req = $pdo->prepare("INSERT INTO `utilisateur`(`nom_utilisateur`, `prenom_utilisateur`, `mail_utilisateur`, `motdepasse`) VALUES (:nom_utilisateur,:prenom_utilisateur,:mail_utilisateur,:motdepasse)");
$req->execute(array(
    'nom_utilisateur' => $nom_utilisateur,
    'prenom_utilisateur' => $prenom_utilisateur,
    'mail_utilisateur' => $mail_utilisateur,
    'motdepasse' => password_hash($motdepasse, PASSWORD_DEFAULT),
));
$_SESSION['inscript_message'] = "Inscription réussi";
exit(header('Location: login.php'));

?>