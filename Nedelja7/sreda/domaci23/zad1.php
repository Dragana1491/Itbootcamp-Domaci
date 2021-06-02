<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.crveni{
    color:red;
}
.zeleni{
    color:green;
}
</style>
<body>
<?php
//Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz.

$x=["kucica", "more", "odmor", "caj"];
$y =[];
for($i=0; $i<count($x); $i++){
    if(strlen($x[$i]) > 5){
        array_push($y, $x[$i]);
        join(",", $y);
        echo "<span class='crveni'>$x[$i]</span>";
    }else{
        array_push($y, $x[$i]);
        echo "<span class='zeleni'>$x[$i]</span>";
        join(",", $y);
    }
    
}



?>
</body>
</html>
