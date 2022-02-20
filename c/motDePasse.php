<?php 
session_start();
function chargerClasse($classe)
{
    require '../m/Competencesphp/Model/'.$classe .'.php';
}

spl_autoload_register('chargerClasse');

if (isset($_GET['see'])) {
    $bddLogin = new ConnectBdd;
    $bdd = $bddLogin->ConnectBdd();
    $manager = new Manager($bdd);
    $user = $manager->getUtilisateur($_SESSION['id']);

    require('../v/change_mdp.php');
}

if (isset($_POST['submitPassword'])) {
    $bddLogin = new ConnectBdd;
    $bdd = $bddLogin->ConnectBdd();
    $manager = new Manager($bdd);
    $user = $manager->getUtilisateur($_SESSION['id']);

    if ($user->getmdp() == $_POST['currentPassword']) {
        if ($_POST['newPassword'] == $_POST['confirmPassword']) {
            $manager->updateUtilisateur($_SESSION['id'], $_POST['newPassword']);
            $message = 'Le mot de passe a bien été modifié.';
        }
        else {
            $message = 'Les deux mots de passe sont différents.';
        }
    }
    else {
        $message = 'Mot de passe incorrect.';
    }

    require('../v/change_mdp.php');
}