<div class="leftmenu">
    <nav class="linecenter">
        <a class="choice" href="../v/comp.php">acceuil</a>
        <a class="choice" href="../v/deconnexion.php">deconnexion</a>
        <span class="names">
            <?php echo  $_SESSION['id_user'] .'</br> <span class="names">' . $_SESSION['nom_user'] . ' ' . $_SESSION['prenom_user'] .'</span>' ?>
        </span>
            <label class="titlemenu"><strong>Synthèse</strong></label></br>
            <a class="subtable" href='../v/collaborateurs.php'>Collaborateurs</a></br>
            <label class="titlemenu"><strong>Divers</strong></label></br>
            <a class="subtable" href='../v/contact_admin.php'>Contact admin</a></br>
            </br>
            </br>
            <a class="choice" href="../c/motDePasse.php">Changer mot de passe</a>
    </nav>
</div>