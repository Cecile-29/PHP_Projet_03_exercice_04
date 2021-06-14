<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet03 Exercice04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet03 Exercice04</h1>
            <h6 class="col-12 text-info text-center">Créez une fonction qui retourne deux nombres aléatoire allant de 1 à 15. 
            Si le premier nombre est plus grand que le deuxième affichez "le premier nombre est plus grand que le deuxième" 
            sinon si le deuxième nombre est plus grand affichez "le premier nombre est plus petit que le deuxième". 
            affichez "les deux nombres sont égaux" si les deux nombres sont identiques.</h6>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php
               function compareNumber(){
               $number1 = rand(1, 15);
               $number2 = rand(1, 15);  
                    echo 'le premier nombre est : '. $number1. ' ';
                    echo 'le deuxième nombre est : '. $number2;
                   if ($number1 == $number2){
                    echo " alors les deux nombres sont égaux";
                   }elseif ($number2 > $number1){
                    echo " alors le premier nombre est plus petit que le deuxième";
                   }else{ 
                    echo " alors le premier nombre est plus grand que le deuxième";
                   }
               }
               echo compareNumber();
            ?>
        </div>
    </div>
</body>
</html>