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
    ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"],
   ];
   //Dodati u gornji niz jos 4 osobe po zelji.

   $x[5]=['ime'=>"Zorana", "godine"=>43, "grad"=>"SM", "pozicija"=>"dizajner"];
   $x[6]=['ime'=>"Sima", "godine"=>19, "grad"=>"Ruma", "pozicija"=>"programer"];
   $x[7]=['ime'=>"Pera", "godine"=>30, "grad"=>"NS", "pozicija"=>"analiticar"];
   $x[8]=['ime'=>"Mika", "godine"=>35, "grad"=>"Bg", "pozicija"=>"programer"];

   print_r($x);
   echo "<br>";
   //Napisati fju koja prikazuje imena svih programera.
   $x = [ 
    ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
    ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
    ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
    ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"],
   ['ime'=>"Zorana", "godine"=>43, "grad"=>"SM", "pozicija"=>"dizajner"],
   ['ime'=>"Sima", "godine"=>19, "grad"=>"Ruma", "pozicija"=>"programer"],
  ['ime'=>"Pera", "godine"=>30, "grad"=>"NS", "pozicija"=>"analiticar"],
   ['ime'=>"Mika", "godine"=>35, "grad"=>"Bg", "pozicija"=>"programer"],
];
   function prikazi_programera($x){
       for($i=0; $i <count($x); $i++){
               if($x[$i]['pozicija'] == "programer"){
                echo $x[$i]['ime'];
               }       
        }
    }

   prikazi_programera($x);
   echo "<br>";
   //Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.


   function podaci($x, $osoba){
       $niz=[];
       foreach($x as $el){
         if($el['ime'] == $osoba) {
             echo join (",", $el);
            } 
       }
     
    }
   podaci($x, "Sima");
   echo "<br>";
   
   foreach($x as $ind=> $osoba){
    if(stripos($osoba['ime'], 's') !==false){
        podaci($x, $osoba['ime']);
    }
}
   
?>
</body>
</html>