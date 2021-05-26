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
//Написати функцију која враћа већи од 3 броја (3 броја су прослеђени функцији кроз параметре)
function ReturnsHigherNum($num1, $num2, $num3){
    if($num1 > $num2 and $num1 > $num3){
        return $num1;
    }elseif($num2 > $num1 and $num2 > $num3){
        return $num2;
    }else{
        return $num3;
    }
}

echo ReturnsHigherNum(6, 7, 8);
?>
</body>
</html>