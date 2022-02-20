<?php 
if (!isset($_SESSION['id'])) {session_start ();}?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Synthèse Compétences</title>
        <link rel="stylesheet" href="../v/css/style.css">
        <link rel="stylesheet" href="../v/css/competences.css">
        <script src="script.js"></script>
    </head>
    <body>
    <header>
        <?php require("menu.php") ?>
    </header>
    <div class ='flex_container'>
    <?php require("leftmenu.php") ?>
        <div class="rightmenu">
            <main>
                <h2 class="synthesetitle">Choix de la page d'accueil</h2>
                <?php if (isset($message)){echo $message;}?>
                <form method="post" action= "../c/pageAccueil.php">
                <label for="choixAccueil">Quelle page choisissez-vous comme page d'accueil?<label></br>
                <input type="radio" id="creation" name="choixAccueil" value="creation"/>
                <label for="creation">Nouvelle réalisation</label>
                <input type="radio" id="gestion" name="choixAccueil" value="gestion"/>
                <label for="gestion">Gestion des réalisations</label>
                <input type="radio" id="synthese" name="choixAccueil" value="synthese"/>
                <label for="synthese">Synthèse des compétences</label></br>
                <input type="submit" value="Valider" name="submitAccueil"/>
            </main>
        </div>
    </body>
</html>