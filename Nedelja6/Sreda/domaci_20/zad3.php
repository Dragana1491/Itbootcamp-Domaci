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

//Написати функцију која враћа N div елемената који имају M span елемената,који имају текст од 1 до M

Function ReturnsDivandSpan($n, $m){
    for($i=1; $i<= $n; $i++){
        return "<div>";
        $brojac=0;
        for($j=1; $j <= $m; $j++){
            $brojac +=1;
            return "<span> $brojac </span>";
        }
        return "</div>";
    }
    
}

echo ReturnsDivandSpan(4, 6)




?>

</body>
</html>