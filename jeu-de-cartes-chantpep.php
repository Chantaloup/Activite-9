<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        h1 {
            text-align: center;
            text-decoration: underline;
        }

        h3 {
            text-align: center;
            color: blue;
        }

        .td1 {
            display: inline-block;
            font-size: 20px;
            padding: 0px 20px;
            text-align: right;
            color: red;
        }

        .td2 {
            display: inline-block;
            font-size: 20px;
            padding: 0px 20px;
            text-align: right;
            color: blue;
        }

        .td3 {
            display: inline-block;
            font-size: 20px;
            padding: 0px 20px;
            text-align: right;
            color:seagreen;
        }

        .td4 {
            display: inline-block;
            font-size: 20px;
            padding: 0px 20px;
            text-align: right;
            color: orangered;
        }

        table {

            border-style: solid;
            border-width: 1px;
            border-color: black;
            padding: 15px;
            display: flexbox;
            margin-right: auto;
            margin-left: auto;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <h1>Mon jeu de cartes</h1>
    <?php
    //1- obtenir jeu de 52 cartes
    
    $suite = ["♦", "♣", "♥", "♠"];            
    $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]; 
    $deck = [];                
    
    for($i = 0; $i < count($suite); $i++)  {               

        for($j = 0; $j < count($num); $j++)  { 
                    
            $deck[] = $num[$j]." - ".$suite[$i];
        }
    }
            
        //boucle pour valider le contenu du tableau $deck            
            
        /* for($i = 0; $i < count($deck); $i++){

                echo $deck[$i]."<br>";
        }*/

    //2- Diviser les cartes en deux paquets de 26 cartes

    $subDeckA = [];  //[1-carreau, 2- carreau, 3-carreau], le tableau va contenir les 26 premiers éléments du $deck, indice 0 à 25
    $subDeckB = [];  //[1-coeur, 2- coeur, 3- coeur] le tableau va contenir les 26 dernier éléments de $deck, indice 26 à 51
      

    for($i = 0; $i < count($deck)/2; $i++) {
    $subDeckA[] = $deck[$i];
    }

    /*for($i = 0; $i < count($deck)/2; $i++){
    echo $subDeckA[$i]."<br>";
    }*/

    //2e paquet

    for($j = 26; $j <count($deck); $j++) {

    $subDeckB[] = $deck[$j];
    
    }

    /*for($j = 26; $j <count($deck); $j++) {
    echo '<font color="red">'.$subDeckB[$j]."<br>";
    }*/


    //3- Coupage, brassage de cartes (suffle) (jeu de cartes mélangées)


    $tableauMelFinal = [];

    //1-carreau, 1-coeur, 2-carreau, 2-coeur

    //echo implode($subDeckA);


    for($i = 0; $i < count($subDeckA); $i++) {
        $tableauMelFinal[] = $subDeckA[$i];
        $tableauMelFinal[] = $subDeckB[$i];
    }

    //fonctionne en faisant attention à la casse et aux tableaux vides...
    // ne pas oublier de faire la boucle pour lire le tableau...
    /*for($i = 0; $i < count($tableauMelFinal); $i++) {
    echo $tableauMelFinal[$i]."<br>";
    }*/


    //4- Afficher 4 jeux de cartes provenant du jeux mélangés. Autrement en ordre d'apparition 4 paquets */

     

    $rang1 = [];    
    $rang2 = [];
    $rang3 = [];
    $rang4 = [];
    ?>
    
    <table class="table">
        <?php
        for($i = 0; $i < 13; $i++) {

        $rang1[] = $tableauMelFinal[$i];
    
        }
        ?>

    <!--cette boucle sert à valider que le rang 1 contient les bonnes valeurs-->
    
        <tr>
            <td class="td1">
                <?php
                for($i = 0; $i < 13; $i++) {
                echo $rang1[$i]."<br>";
                }
                ?>
            </td>            
                <?php
                //tableau 2

                for($i = 13; $i < 26; $i++) {
                $rang2[] = $tableauMelFinal[$i];        
                }
                ?>
                <td class="td2">
                <?php

                for($i = 0; $i < 13; $i++) {
                    echo $rang2[$i]."<br>";
                }
                ?>
            </td>
            <td class="td3">
            <?php
                //tableau 3

                for($i = 26; $i < 39; $i++) {
                    $rang3[] = $tableauMelFinal[$i];        
                }
                ?>
                <td class="td3">
                <?php
                for($i = 0; $i < 13; $i++) {
                echo $rang3[$i]."<br>";
                }
                ?>
                </td>
                <?php
                //tableau 4

                for($i = 39; $i < 52; $i++) {
                $rang4[] = $tableauMelFinal[$i];        
                }
                ?>
                <td class="td4">
                <?php
                for($i = 0; $i < 13; $i++) {
                echo $rang4[$i]."<br>";
                }
                ?>
                </td>
    </table>
    <footer>
        <h3>Chantal P. </h3>
    </footer> 
    </body>
    </html>