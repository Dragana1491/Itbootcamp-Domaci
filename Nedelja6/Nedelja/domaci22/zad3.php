<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.meni{
    display:inline-block;
}
</style>
<body>
<?php
//Napisati fju koja od niza reči pravi html listu kao meni... Npr.  ['Stavka 1', 'Stavka 2', …] pretvara u <ul><li>Stavka 1</li><li>Stavka 2</li>…</ul>.  

function listica(){
    $x=['Stavka 1', 'Stavka 2', 'Stavka 3', 'Stavka 4', 'Stavka 5' ];
    echo "<ul>";
    foreach($x as $ind => $el){
        echo "<li class='meni'> $el</li>";
    }
    echo "</ul>";
}
listica();


?>
</body>
</html>