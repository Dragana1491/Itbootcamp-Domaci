<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
div{
    width:200px;
    display: inline-block;
    vertical-align: top;
}
#crvena{
    color:red;
}
#zelena{
    color:green;
}
.slika{
    height:200px;
    width:200px;
}
</style>
<body>
<?php

    function praviDiv($proizvod, $slika, $cena, $popust){
        echo "<div>";
        echo "<img  class='slika'src=$slika><br>";
        echo $proizvod."<br>";
        if($popust > 0){
            $prava = $cena - $cena * ($popust / 100);
            echo "<span id='crvena'>$cena</span><br>";
            echo "<span id='zelena'>$prava</span><br>";
        }else{
            echo "<span>$cena</span><br>";
        }
        echo "</div>";
    }

 ?>   
</body>
</html>