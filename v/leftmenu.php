            <div class="leftmenu">
                <nav class="linecenter">
                    <a class="choice" href="../v/comp.php">acceuil</a>
                    <a class="choice" href="../v/deconnexion.php">deconnexion</a>
                    <span class="names">
                        <?php echo  $_SESSION['id_user'] .'</br> <span class="names">' . $_SESSION['nom_user'] . ' ' . $_SESSION['prenom_user'] .'</span>' ?>
                    </span>
                        <label class="titlemenu"><strong>Situation pro</strong></label></br>
                        <a class="subtable" href='../v/creation_situation.php'>Nouvelle réalisation</a></br>
                        <a class="subtable" href='../v/Situation.php'>Gestion des réalisations</a></br>
                        <label class="titlemenu"><strong>Synthèse</strong></label></br>
                        <a class="subtable" href='../v/competences.php'>Tableau de synthèse</a></br>
                        <label class="titlemenu"><strong>Divers</strong></label></br>
                        <a class="subtable" href='../v/contact_admin.php'>Contact admin</a></br>
                        </br>
                        </br>
                        <a class="choice" href="../c/pageAccueil.php?see">Choix page accueil</a>
                        <a class="choice" href="../c/motDePasse.php?see">Changer mot de passe</a>
                </nav>
            </div>