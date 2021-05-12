<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div> promenljive:200,80 </div>
    <?php 
    $promenljiva1 = 200;
    $promenljiva2 = 80;
    $zbir = $promenljiva1 + $promenljiva2;
    $proizvod = $promenljiva1 * $promenljiva2;
    $razlika = $promenljiva1 - $promenljiva2;
    $kolicnik = $promenljiva1 / $promenljiva2;
    echo $zbir."<br />";
    echo $proizvod."<br />";
    echo $razlika."<br />";
    echo $kolicnik."<br />";
    ?>
    <div> Promenljive a,b,c </div>
    <?php 
    $a = 2;
    $b = 5;
    $c = 8;

    $zbir2 = $a + $b + $c;
    echo("Zbir brojeva $a,$b i $c je $zbir2");
    ?>

</body>
</html>