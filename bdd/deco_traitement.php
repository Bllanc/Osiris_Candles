<?php // (avec SESSION)
session_start();
// ------------------------------------------------------
// on vide/détruit les variables de session
$_SESSION = array();
$session_name = session_name();
session_destroy();
// Redirection vers le site
header("Location: ../index.php");
exit;
// ------------------------------------------------------
?>

<!-- <?php
        session_start();
        if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 1800)) {
            session_unset();
            session_destroy();
            echo "session destroyed";
        }
        $_SESSION['start'] = time();
        ?> -->