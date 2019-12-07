<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part4 n°2</h3>
        <p>Consigne :<br>
            Faire une fonction qui prend en paramètre une chaîne de caractères.<br>
            Elle doit retourner cette même chaîne de caractère.</p>

    <?php
    $num1 = 40;
    $num2 = 20;

    echo compareNumbers($num1,$num2);

            function compareNumbers($a,$b){
                if($a>$b){
                    echo "Le 1er nombre est plus grand que le 2nd.";
                }

                elseif($a<$b){
                    echo "Le 1er nombre est plus petit que le 2nd.";
                }

                else{
                    return "Les 2 nombres sont égaux";
                }
            }

        ?>
    </body>
</html>