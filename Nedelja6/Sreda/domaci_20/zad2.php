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
//Написати функцију која враћа div унутар којег се налази N span елемената који за текст имају редом бројеве од 1 до N
    function ReturnsDiv($n){
        return "<div>";
        for($i=1; $i <= $n; $i++){
            return "<span> $i</span>";
        } 
        return "</div>";
    }
    
    echo ReturnsDiv(5);
    
    ?>
</body>
</html>