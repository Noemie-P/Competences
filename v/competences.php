<?php session_start ();

function chargerClasse($classe)
{
    require '../m/Competencesphp/Model/'.$classe .'.php';
}

spl_autoload_register('chargerClasse');
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>competences</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/situation.css">
  <link rel="stylesheet" href="css/competences.css">
  <link rel="stylesheet" href="css/comp.css">
  <script src="script.js"></script>
</head>
<body>
    <?php require("menu.php") ?>
<div class="flex_container">
    <?php require("leftmenu.php") ?>
<div class="rightmenu">
<h2 class="rightborder">Synthèse des compétences</h2>
<?php

$bddLogin = new ConnectBdd;
$bdd = $bddLogin->ConnectBdd();
$manager= new Manager($bdd);

$bloc = $manager->getListBloc();
$totalBloc = count((array)$bloc);

for ($i = 0; $i <= $totalBloc-1 ; $i++)
{

   echo       
        $bloc[$i]->getidentifiant().'-'. $bloc[$i]->getnom()
        .'<div class="activite">';

    $activite = $manager->getListActiviteFromBloc($bloc[$i]->getid_bloc());
    $totalActivite = count((array)$activite);

    for ($j = 0; $j <= $totalActivite-1 ; $j++) {

        echo 

            'Activité ' .substr($activite[$j]->getidentifiant(),1).' - '. $activite[$j]->getnom()
            .'<div class="competence">
            <table class="synthese">
                <tr>
                    <th class="columnCompetence">Compétence</th>
                    <th class="columnSituation">Situation</th>
                </tr>';

        $competence = $manager->getListCompetenceFromActivite($activite[$j]->getid_activite());
        //$numberSituation = $manager->countSituationOfCompetence($_SESSION['id'], $competence[$k]->getId());
        $totalCompetence = count((array)$competence);
        for ($k = 0; $k <= $totalCompetence-1 ; $k++) {
            $numberSituation = $manager->countSituationOfCompetence($_SESSION['id'], $competence[$k]->getid_competence());
            echo 
                '<tr>
                    <td class="rowCompetence">'.substr($competence[$k]->getidentifiant(),1).'-'. $competence[$k]->getnom().'</td>
                    <td class="rowSituation">'.$numberSituation.'</td>
                </tr>';
        }
        echo '</table>';
        echo '</div>';
    }
    echo '</div>';
}
?>

</div>
</body>
</html>