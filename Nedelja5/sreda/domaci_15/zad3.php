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
     //treci zadatak
$ime1 = "Aleksandra";
$ime2 = "Sanja";
function duzeime(){
    global $ime1, $ime2;
    $prvoime = strlen($ime1);
    $drugoime = strlen($ime2);
    If( $prvoime > $drugoime){
        return $ime1;
    }else{
        return $ime2;
    }
}

function kraceime(){
    global $ime1, $ime2;
    $prvoime = strlen($ime1);
    $drugoime = strlen($ime2);
    If( $drugoime > $prvoime){
        return $ime1;
    }else{
        return $ime2;
    }
}
 echo "<p style='color:red'>" .duzeime()."</p>";
 echo "<p style='color:green'>" .kraceime()."</p>";
    ?>
</body>
</html>