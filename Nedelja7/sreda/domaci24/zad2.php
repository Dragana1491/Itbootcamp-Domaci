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
/*-Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak=>28] pronalazi:
Koji dan je najuspesniji
Kolika je prosecna uspesnost
Razliku izmedju najbolje i najgore uspesnosti*/

$x=['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>28];

function uspesnost($x){
    $max=0;
    foreach($x as $dan =>$broj){
        if($max < $broj){
            $max=$broj;
            $ind =$dan;
        }
    }
    echo $ind;
}
$u =uspesnost($x);
echo $u;

echo "<br>";
$x=['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak'=>28];
function prosecna_usp ($x){
    $brojac=0;
    $br =0;
    foreach($x as $dan =>$broj){
            $br =$br + $broj;
            $brojac++;   
    }  
    $prosek= $br / $brojac; 
     echo  $prosek;
    
}
echo prosecna_usp($x);
 
echo "<br>";
//Razliku izmedju najbolje i najgore uspesnosti
function razlika($x){
    $max=0;
    foreach($x as $dan =>$broj){
        if($max < $broj){
            $max=$broj;
            $ind =$dan;
        }
    }
    $min=0;
    foreach($x as $dan =>$broj){
        if($min > $broj){
            $min=$broj;
            $ind =$dan;
        }
    }


    //ili ovako 
    $max=max($x);
    $min =min($x);
    $raz =$max - $min;

   return $raz; 
}
echo razlika($x);
?>
</body>
</html>