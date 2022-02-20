<?php session_start(); ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/competences.css">
  <link rel="stylesheet" href="css/contact.css">
  <script src="script.js"></script>
</head>
<body>
    <?php require("menu.php") ?>
<div class="flex_container">
    <?php 
      if ($_SESSION["type_compte"] == "collaborateur") {
        require("leftmenu.php");
      }
      elseif ($_SESSION["type_compte"] == "admin") {
        require("leftMenuRh.php");
      }?>

    <div class="rightmenu">
      <div class="contact">
      <h1>Contact Admin</h1>
      <p> Faites part de votre problème à ces coordonnées :</p>
      <br><h2 class="adress">admin@admin.pro</h2></br>
      </div>
  </div>
</div>
</body>