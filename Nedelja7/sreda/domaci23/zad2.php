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
//Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti). 

$x=[2,3,1,57,27,3,6,44];
$veci=[];
$brojac=0;
$a=0;
for($i=0; $i<count($x); $i++){
    $a =$a + $x[$i];
    $brojac ++; 
} 
    echo $a;
    echo "<br>"; 
    echo $brojac;
    echo "<br>"; 
    

    for($i=0; $i<count($x); $i++){
        $as= $a / $brojac;
        
        if($as < $x[$i]){
        array_push($veci, $x[$i]);
        
        }  
    }  
    echo "Y: ".join(",", $veci)."<br />";  
?>
</body>
</html>