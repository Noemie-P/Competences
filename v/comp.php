<?php session_start ();?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Compétences</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/competences.css">
        <link rel="stylesheet" href="css/comp.css">
        <link rel="stylesheet" href="css/situation.css">
    <script src="script.js"></script>
    </head>
    <body>
        <header>
            <?php require("menu.php") ?>
        </header>
    <div class ='flex_container'>
    <?php 
      if ($_SESSION["type_compte"] == "collaborateur") {
        require("leftmenu.php");
      }
      elseif ($_SESSION["type_compte"] == "admin") {
        require("leftMenuRh.php");
      }?>
        <div class="rightbloc">
            <div class="titlecomp">
            <h2>Bienvenue</h2>
            </div> <p> Sur ce site vous pourrez gérer vos réalisations et valider des compétences utilisés dans ces réalisations.  </p>
            </div>
        </div> 
        </div>
    </div>
    </body>
</html>