<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4 : Les conditions</title>
</head>
<body>
    <h1>Exo 4 : Les conditions</h1>
    <h4>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
    Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</h4>
    <p>
    <?php
   $richter = 5;
   switch ($richter) {
       case 1:
           echo("Micro-séisme impossible à ressentir.");
           break;
       case 2:
           echo("Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.");
           break;
       case 3:
           echo("Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.");
           break;
       case 4:
           echo("Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.");
           break;
       case 5:
           echo("Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.");
           break;
       case 6:
           echo("Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.");
           break;
       case 7:
           echo("Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.");
           break;
       case 8:
           echo("Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.");
           break;
       case 9:
           echo("Séisme capable de tout détruire sur une très vaste zone.");
           break;
       default:
           echo("Valeur inconnue");
   }
    ?>
    </p>
</body>
</html>