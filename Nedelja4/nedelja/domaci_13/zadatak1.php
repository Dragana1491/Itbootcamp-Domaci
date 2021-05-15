<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .crvena{
        color:red;
    }
    .zelena{
        color:green;
    }
    </style>
<body>
    <?php
    $br1 = mt_rand(1,10);
    $br2 = mt_rand(1,10);
    if($br1 > $br2){
        echo "<span class='zelena'>$br1</span>";
    }else{
        echo"<span class='crvena'>$br1</span>";
    }
    if($br2 > $br1){
        echo "<span class='zelena'>$br2</span>";
    }else{
        echo"<span class='crvena'>$br2</span>";
    }
    echo "<br />";
    ?>
    <?php
    $br1 = mt_rand(1,10);
    $br2 = mt_rand(1,10);
    //echo "$br1,$br2.";
    if($br1 > $br2){
        echo "<span style='color:green;'>$br1</span>";
    }else{
        echo "<span style='color:red;'>$br1</span>";
    }
    if($br2 > $br1){
        echo "<span style='color:green;'>$br2</span>";
    }else{
        echo "<span style='color:red;'>$br2</span>";
    }
    ?>
</body>
</html>