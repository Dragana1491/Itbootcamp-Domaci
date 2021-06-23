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
include "klasa_baza.php";
include "klasa_korpa.php";
$proizvodi = $b-> daj_proizvode();
echo "<div>";
foreach($proizvodi  as $red){
    echo "<div>";
    foreach($red as $val){
        echo"<span>". $val."</span>";
    echo "<form action='promena_korpe.php'>";
    echo"<input type='hidden' name='akcija' value='dodaj'>";
    echo"<input type='hidden' name='id_proizvoda' value='".$proizvodi['barkod']."'>";
    //echo"<input type='hidden' name='naziv' value='".$proizvodi['naziv']."'>";
   // echo"<input type='hidden' name='cena' value='".$proizvodi['cena']."'>";
   // echo"<input type='hidden' name='kolicina' value='".$proizvodi['kolicina']."'>";
    echo"<input type='submit' value='Ubaci u korpu'>";
    echo "</form>";
echo "</div>";   
}
echo "</div>";
}

?>
</body>
</html>