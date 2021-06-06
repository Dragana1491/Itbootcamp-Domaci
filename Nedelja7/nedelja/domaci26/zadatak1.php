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




$x = [ 
    ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
    ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
    ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
    ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
   ];
   //Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)
   $x = array_map(function($osoba){
        $osoba['godine_staza'] = mt_rand(1,3);
        return $osoba;
   }, $x);
print_r ($x);
echo "<br />";   
//Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)

usort ($x, function ($a, $b){
    if($a['godine_staza']>$b['godine_staza']){
        return -1;
    }else{
        return 1;
    }
    
});
print_r ($x);
echo "<br />";

//Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter)
/*$x = [ 
    ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
    ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
    ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
    ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
   ];*/

    $max=['godine_staza'=> 0];
    foreach($x as $ind=>$el){
        if ($max < $el['godina_staza']){
            $max=$el['godina_staza'];
        }
    }

    $najblize_penziji = array_filter( $x, function ($osoba){
        global $max;
        $y=[];
        if($osoba['godine_staza'] == $max['godine_staza'])
            //array_push($y, $max['godine_staza'] );
            echo join($y, $max['godine_staza']);
    });
    print_r($najblize_penziji);
?>
</body>
</html>