<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false.
    $x=[3,4,5,6,2];
        function vracatru($x){
           
            $sadrzi = true;
             for($i=0; $i<count($x); $i++){
                 if($x[$i] === 0){
                    $sadrzi= false; 
                    }
                }
                return $sadrzi;
        }

$f =vracatru($x);
var_dump ($f);

    ?>
</body>
</html>