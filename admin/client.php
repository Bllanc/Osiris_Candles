<?php
session_start();
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/OsirisCandles";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/panel_admin.css">
    <link rel="stylesheet" href="../css/client.css">

    <title>Document</title>
</head>

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
                    <a href="<?php echo $path ?>/admin/index.php"">
                        <span class=" icon">
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
            <table id="client">
                <thead>
                    <tr>
                        <th>Civilité</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Tél</th>
                        <th>Adresse</th>
                        <th>Mail</th>
                        <th>Fidelite</th>
                        <th>Code Postal</th>
                        <th>Ville</th>
                        <th>Pays</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require_once '../bdd/connect_inc.php' ?>
                    <?php
                    foreach ($pdo->query("SELECT * FROM utilisateur WHERE 1") as $row) {
                        echo "
                        <tr>
                            <td>" . $row['civilite_utilisateur'] . "</td>
                            <td>" . $row['nom_utilisateur'] . "</td>
                            <td>" . $row['prenom_utilisateur'] . "</td>
                            <td>" . $row['tel_utilisateur'] . "</td>
                            <td>" . $row['adresse_utilisateur'] . "</td>
                            <td>" . $row['mail_utilisateur'] . "</td>
                            <td>" . $row['fidelite'] . '/200' . "</td>
                            <td>" . $row['code_postal'] . "</td>
                            <td>" . $row['ville'] . "</td>
                            <td>" . $row['pays'] . "</td>
                        </tr>";
                    }
                    ?>

                </tbody>

            </table>
        </div>



        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="../js/panel_admin.js"></script>
</body>

</html>