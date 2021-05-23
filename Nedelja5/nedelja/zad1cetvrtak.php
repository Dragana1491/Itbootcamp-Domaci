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
    $ime = "Dragana";
    $prezime ="Lalic";
function paragraf(){
    global $ime, $prezime;
    echo "<p><span>$ime</span><span>$prezime</span></p>";
}
$broj1 =strlen($ime);
$broj2 =strlen($prezime);
$pon = $broj1 + $broj2;
echo "$pon";

for ($i =1; $i <=$pon; $i++){
    paragraf();
}
    ?>
</body>
</html>