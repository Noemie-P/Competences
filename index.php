<?php 
session_start();

function chargerClasse($classe)
{
    require 'm/Competencesphp/Model/'.$classe .'.php';
}

spl_autoload_register('chargerClasse');

if (!isset($_SESSION['id_user'])) {
    
    header('Location: v/login.php');
}

if (isset($_SESSION['id_user'])) {
    if (isset($_GET["addLink"])) {
        $bddLogin = new ConnectBdd;
        $bdd = $bddLogin->ConnectBdd();
        $manager = new Manager($bdd);
        $listSituation = $manager->getListSituation();
        $total = count((array)$listSituation) ;
        $idSituation = $listSituation[$total-1]->getid(); 
        echo $idSituation;
        $lien = new Lien($id_source = NULL,$_GET["uri"],$_GET["detailUri"],$id_realisation = $idSituation);
        $manager->addLien($lien);
        $competence = new Competence_visee($id_competence_visee = NULL,$_GET["detailCompetence"],$id_realisation = $idSituation,$_GET["competence"]);
        echo $_GET["competence"];
        $manager->addCompetence_visee($competence);
        header('Location: v/creation_situation.php');
    }
    else {
        if ($_SESSION['type_compte'] == 'collaborateur') {
            header('Location: v/competences.php');
        }
        if ($_SESSION['type_compte'] == 'admin') {
            header('Location: v/collaborateurs.php');
        }
    }
}
