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
    //zad1. 
$i=20;
while($i>=1){
echo $i;
$i--;
}


//zad2.Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom.
echo "<br>";
$a =30;
$s =1; 
$p=1;
while($s < 100000){
$p =$s;
    $s = $s * $a;
    echo "<br>";
    //echo $s / $a;
    $a--;
   $a1 = $a + 1;
}echo "<br><span style='color:red'>".$s / $a1."</span>";
echo "<br><span style='color:green'>".$a1."</span>";

//zad.3
echo"<br>";
for($i=30; $i<=99; $i++){
    $prva= floor($i/10);
    //echo $prva;
    $druga= ($i%10);
    //echo $druga;
   if($prva %3 ==0 or $druga %  4 ==0){
       continue;
   }else{
       echo "<br> $i";
   }
}
?>
</body>
</html>