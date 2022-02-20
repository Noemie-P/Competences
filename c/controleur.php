<?php 
function chargerClasse($classe)
{
    require '../m/Competencesphp/Model/'.$classe .'.php';
}

spl_autoload_register('chargerClasse');

$bddLogin = new ConnectBdd;
$bdd = $bddLogin->ConnectBdd();
$reponse = $bddLogin->requestBDD($bdd, 'SELECT * FROM Bloc');
    
$req = $bddLogin->requestBDD($bdd, 'SELECT * FROM Activite ');
    
$req_comp = $bddLogin->requestBDD($bdd, 'SELECT * FROM Competence');


