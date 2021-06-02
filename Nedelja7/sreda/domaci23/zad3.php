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
//a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz
//b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.
//c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.
//d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna. 


//Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz
function ucitavabroj(){
    $broj= $_GET['broj'];
    $y =explode (",", $broj);
    return $y;
}
$x= ucitavabroj();
print_r($x);
echo "<br>";
//b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.
$x =[15,17,33,14,64,5,2];
function vracaparne($x){
    $ima=false;
    $brojac=0;
    foreach($x as $el){
        if($el %2 ==0){
            $brojac++; 
        }
        if($brojac > 3){
            $ima = true;
        }
    }
    return $ima;
}
$b= vracaparne($x);
print_r($b);

//c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.

$z=[2,3,4,5,1001];
function svimanjiodhiljadu($z){
    $imasve=true;
    foreach($z as $ind => $el){
        if($z[$ind] > 1000){
            $imasve=false;
        }
    }
    return $imasve;
}
$s=svimanjiodhiljadu($z);
print_r($s);
////d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna. 
function sve($x){
    $b= vracaparne($x);
    $s=svimanjiodhiljadu($x);
    var_dump($b);
    var_dump($s);
}

echo sve($x);
?>
</body>
</html>