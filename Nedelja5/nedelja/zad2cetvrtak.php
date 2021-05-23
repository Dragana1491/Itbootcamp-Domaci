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
    $n =mt_rand(1,10);
    $x =mt_rand(1,10);
    Echo "$n,$x <br />";
    function span(){
        global $n, $x;
        for($i =1; $i <=$n; $i++){
            echo "<span> Ovo je span $i</span>";
        }
        
    }
    //span();
    for($i =1; $i <=$x; $i++){
        echo "<div>". span()."</div>";}
    ?>
</body>
</html>