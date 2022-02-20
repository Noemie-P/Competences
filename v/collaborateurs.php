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
    <?php require("leftMenuRh.php") ?>
<!--<table class="competencestable">-->
    
<!--<tr>
    <th>Numéro Bloc</th>
    <th>Nom Bloc </th>
    <th>Situation</th>
</tr>-->
<div class="rightmenu">
<h2 class="rightborder">Liste des collaborateurs</h2>

<table>
            <th>
                <td>Identifiant</td>
                <td>Nom</td>
                <td>Prénom</td>
            </th>
<?php

$bddLogin = new ConnectBdd;
$bdd = $bddLogin->ConnectBdd();
$manager= new Manager($bdd);
$collaborateurs = $manager->getListCollaborateurs();
$total = count((array)$collaborateurs) ;


for ($i = 0; $i <= $total-1 ; $i++)
{

   echo 
       '<tr>
            <td></td>
            <td><a href="syntheseCollab.php?id='.$collaborateurs[$i]->getid_utilisateur().'">'. $collaborateurs[$i]->getidentifiant().'</a></td>
            <td>'.$collaborateurs[$i]->getnom().'</td>
            <td>'.$collaborateurs[$i]->getprenom().'</td>
       </tr>';

}
echo ' </table>  ';

?>

</div>
<!--</table>-->
</body>
</html>