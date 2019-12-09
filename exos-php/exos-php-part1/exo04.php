<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP n°4</h3>
        <p>Consigne :<br>
        Créer et initialiser respectivement avec une valeur de votre choix, les variables de type :
        <ul>
            <li>string</li>
            <li>int</li>
            <li>float</li>
            <li>boleéen</li>
        </ul>
        Les afficher.</p>

        <?php
            // Déclaration et initialisation des variables
            $string = "string";
            $int = 777;
            $float = 4.44;
            $bolean2 = false;
            $bolean1 = true;
            
            // Affichage des valeurs initialisées
            echo "La variable $string contient une valeur de type : ";
            echo gettype($string);
            echo "<br>";

            echo "La variable $int contient une valeur de type : ";
            echo gettype($int);
            echo "<br>";

            echo "La variable $float contient une valeur de type : ";
            echo gettype($float);
            echo "<br>";

            echo "La variable $bolean2 contient une valeur de type : ";
            echo gettype($bolean2);
            echo "<br>";

            echo "La variable $bolean1 contient une valeur de type : ";
            echo gettype($bolean1);
            echo "<br>";
        ?>
    </body>
</html>