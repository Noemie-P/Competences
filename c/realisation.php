<?php 

function chargerClasse($classe)
{
    require '../m/Competencesphp/Model/'.$classe .'.php';
}

spl_autoload_register('chargerClasse');

if(isset($_POST['valider'])){
    $bddLogin = new ConnectBdd;
    $bdd = $bddLogin->ConnectBdd();
    $nom = $_POST['nom_situation'];
    $date_debut = $_POST['date_debut'];
    $details = $_POST['details'];
    $date_creation = date("Y-m-d");
    $duree = $_POST['duree'];
    $type_duree = $_POST['duree_unite'];

    $uri = $_POST['uri'];
    $detailUri = $_POST['details_uri'];
    $id_user = $_POST['id_user'];

    $competence = $_POST['competence'];
    $detailCompetence = $_POST['details_competence'];

    $situation = new Situation($id = NULL,$nom,$date_debut,$details,$date_creation,$duree,$type_duree,$id_user);
    $manager = new Manager($bdd);
    $manager->addSituation($situation);
    $listSituation = $manager->getListSituation();
    header("Location: ../index.php?addLink&uri=". $uri ."&detailUri=". $detailUri ."&competence=".$competence."&detailCompetence=".$detailCompetence);
}

if(isset($_GET['supprimer']) && isset($_GET['id'])){
    $bddLogin = new ConnectBdd;
    $bdd = $bddLogin->ConnectBdd();
    $manager = new Manager($bdd);
    $situation = $manager->getSituation($_GET['id']);
    $manager->deleteSourceOfSituation($situation);
    $manager->deleteCompetenceViseeOfSituation($situation);
    $manager->deleteSituation($situation);
    header("Location: ../v/creation_situation.php");
    
}
