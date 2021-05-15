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
    $br1 =mt_rand(1,20);
    $br2 =mt_rand(1,20);
    $br3 =mt_rand(1,20);
    
    echo "$br1.$br2.$br3";
    echo "<br />";
    If($br1 < $br2 and $br1 < $br3){
        if($br2 < $br3){
           echo "$br1.$br2.$br3";
        }else{
            echo "$br1.$br3.$br2";
    }
}
If($br2 < $br1 and $br2 < $br3){
    if($br1 < $br3){
       echo "$br2.$br1.$br3";
    }else{
        echo "$br2.$br3.$br1";
}
}
If($br3 < $br2 and $br3 < $br1){
    if($br2 < $br1){
       echo "$br3.$br2.$br1";
    }else{
        echo "$br3.$br1.$br2";
}
}
    ?>
</body>
</html>