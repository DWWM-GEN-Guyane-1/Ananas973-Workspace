<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part2 n°4</h3>
        <p>Consigne :<br>
        L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre.<br>
        Cette échelle va de 1 à 9.Créer une variable magnitude.<br>
        Selon la valeur de magnitude, afficher la phrase correspondante.</p>

        <table>
        <tr>
        <td>1</td>
        <td>Micro-séisme impossible à ressentir.</td>
        </tr>
        <tr>
        <td>2</td>
        <td>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</td>
        </tr>
        <tr>
        <td>3</td>
        <td>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</td>
        </tr>
        <tr>
        <td>4</td>
        <td>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</td>
        </tr>
        <tr>
        <td>5</td>
        <td>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</td>
        </tr>
        <tr>
        <td>6</td>
        <td>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</td>
        </tr>
        <tr>
        <td>7</td>
        <td>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</td>
        </tr>
        <tr>
        <td>8</td>
        <td>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</td>
        </tr>
        <tr>
        <td>9</td>
        <td>Séisme capable de tout détruire sur une très vaste zone.</td>
        </tr>
        </table>
<br>


        <?php
        $magnitude = 11;
        echo "La magnitude enregistrée sur l'échelle de Richter est de : $magnitude";
        echo "<br>";

        if($magnitude <= 1){
            echo "Micro-séisme impossible à ressentir.";
        }

        elseif ($magnitude == 2){
            echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        }

        elseif ($magnitude == 3){
            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        }

        elseif ($magnitude == 4){
            echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        }

        elseif ($magnitude == 5){
            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        }

        elseif ($magnitude == 6){
            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        }

        elseif ($magnitude == 7){
            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        }

        elseif ($magnitude == 8){
            echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        }

        elseif ($magnitude == 9){
            echo "Séisme capable de tout détruire sur une très vaste zone.";
        }

        else {
            echo "Vous êtes dans la merde suprême !";
        }

        ?>
    </body>
</html>