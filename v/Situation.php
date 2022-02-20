<?php session_start ();

function chargerClasse($classe)
{
    require '../m/Competencesphp/Model/'.$classe .'.php';
}

spl_autoload_register('chargerClasse');?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/situation.css">
        <link rel="stylesheet" href="css/competences.css">
        <title>COMPETENCES</title>
    </head>
    <body>
        <?php require("menu.php") ?>
        <div class="flex_container">
            <?php require("leftmenu.php") ?>

            <div class="rightbloc">
                <div class="titlesituation">
                    <h2>Gestion des réalisations</h2>
                </div>
                <table>
                    <th>
                        <td>Date de début</td>
                        <td>Nom</td>
                        <td>Date de création</td>
                        <td>Actions</td>
                    </th>

        <?php

        $bddLogin = new ConnectBdd;
        $bdd = $bddLogin->ConnectBdd();
        $manager= new Manager($bdd);
        $situation = $manager->getListSituation($_SESSION['id']);
        $total = count((array)$situation) ;


        for ($i = 0; $i <= $total-1 ; $i++)
        {

        echo 
            '<tr>
                    <td></td>
                    <td>'. $situation[$i]->getdate_debut().'</td>
                    <td>'.$situation[$i]->getnom().'</td>
                    <td>'.$situation[$i]->getdate_creation().'</td>
                    <td><a href="../c/realisation.php?supprimer&id='. $situation[$i]->getid().'">supprimer</a></td>
            </tr>';

        }
        echo ' </table>  ';

        ?>
            <div>
        </div>

    </body>
</html>