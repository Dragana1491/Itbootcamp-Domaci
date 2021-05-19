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
/*Ako je uslov ispunjen, izračunati 
zbir onih brojeva od prvog do drugog koji su deljivi sa 4, 
pa zbir onih brojeva od trećeg do četvrtog koji su deljivi sa 3. 
Prikazati koji je zbir veći.  */

    $broj1 = $_GET['a'];
    $broj2 = $_GET['b'];
    $broj3 = $_GET['c'];
    $broj4 = $_GET['d'];
    echo "$broj1, $broj2, $broj3, $broj4";
    If($broj2 > $broj1 and $broj4 > $broj3)
     {
        $zbir1 = 0;
        for($i = $broj1; $i <=$broj2; $i++) {
            if($i % 4 == 0) $zbir1 +=$i;
        }   //echo "Zbir brojeva deljivih sa 4 je $zbir1";

             $zbir2 = 0;
             for($i = $broj3; $i <=$broj4; $i++) {
                if($i % 3 == 0) $zbir2 +=$i;
                 }//echo "Zbir brojeva deljivih sa 3 je $zbir2"; 

                if( $zbir1 > $zbir2){
                echo "<br />Veci je $zbir1";

            }else {
                echo "<br />Veci je $zbir2";
            }

    }else
    {
  echo "Greska";
   }
    ?>
</body>
</html>