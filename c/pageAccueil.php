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

    require('../v/choix_page_accueil.php');
}

if (isset($_POST['submitAccueil'])) {
    $bddLogin = new ConnectBdd;
    $bdd = $bddLogin->ConnectBdd();
    $manager = new Manager($bdd);
    $user = $manager->getUtilisateur($_SESSION['id']);
    if (isset($_POST['choixAccueil'])) {
        $manager->updatePageUtilisateur($_SESSION['id'], $_POST['choixAccueil']);
        $message = 'Votre choix a bien été enregistré.';
    }
    require('../v/choix_page_accueil.php');
}