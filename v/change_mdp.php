
<?php
if (!isset($_SESSION['id'])) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Changement de mot de passe :</title>
<link rel="stylesheet" href="../v/css/style.css">
<link rel="stylesheet" href="../v/css/competences.css">

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

    <div class="rightmenu"><?php if(isset($message)) { echo $message; } ?>
        <h3 class="rightborder">Changement de mot de passe</h3>
        <form method="post" action="../c/motDePasse.php">
            <label> Mot de passe actuel : </label>
            <br>
            <input class="logininput" type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
            <br>
            <label> Nouveau mot de passe : </label> 
            <br>
            <input class="logininput" type="password" name="newPassword"><span id="newPassword" class="required"></span>
            <br>
            <label> Confirmer le mot de passe : </label>
                <br>
            <input class="logininput" type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
            <br><br>
            <input type="submit" name ="submitPassword" value="valider">
        </form>
    </div>
    </div>
    <br>
    <br>
</body>
</html>

