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
//Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for)

function trocifreniDvocifreni(){
    $x =[234,34,765,76,947,643,11,101];
    $brojac2=0;
    $brojac3=0;
    for($i=0; $i<count($x); $i++){
        if($x[$i] >9 and $x[$i]<100){
            $brojac2++;
        }
        if($x[$i] >99 and $x[$i]<1000){
            $brojac3++;
        }
    }
    if($brojac2 > $brojac3){
        echo "Ima vise dvocifrenih";
    }else{
        echo "ima vise trocifrenih";
    }
}
trocifreniDvocifreni();

?>
</body>
</html>