<?php

function chargerClasse($classe)
{
    require '../m/Competencesphp/Model/'.$classe .'.php';
}

spl_autoload_register('chargerClasse');

$identifiant = $_POST['loginID'];
$mdp = $_POST['password'];

$bddLogin = new ConnectBdd;
$bdd = $bddLogin->ConnectBdd();
$manager = new Manager($bdd);
$user = $manager->getUtilisateurFromIdentifiant($identifiant);

$idUser = $user->getid_utilisateur();
$nomUserBDD= $user->getnom();
$prenomUserBDD =$user->getprenom();
$pwdBDD = $user->getmdp();
$tdcBDD = $user->gettype_de_compte();
$page = $user->getpage();

if (isset($_POST['loginID']) AND isset($_POST['password']))
{
    if ($mdp === $pwdBDD) {
        session_start();
        $_SESSION['id'] = $idUser;
        $_SESSION['id_user'] = $identifiant;
        $_SESSION['nom_user'] = $nomUserBDD;
        $_SESSION['prenom_user'] =$prenomUserBDD;
        $_SESSION['type_compte'] = $tdcBDD;
        $_SESSION['page'] = $page;

        if ($_SESSION['type_compte']== 'collaborateur') {
            if ($_SESSION['page'] == "gestion"){
                header("Location: ../v/Situation.php");
            }
            elseif ($_SESSION['page'] == "synthese"){
                header("Location: ../v/competences.php");
            }
            else {
                header('Location: ../v/creation_situation.php');
            }
        }
        elseif ($_SESSION['type_compte']== 'admin') {
            header("Location: ../v/collaborateurs.php");
        }
        else {
            echo 'aucun type de compte';
        }
    }
    else {
        echo 'mauvais mot de passe ou indentifiant';
    }
}
else {
    echo 'aucun identifiant ou mot de passe';
}

?>