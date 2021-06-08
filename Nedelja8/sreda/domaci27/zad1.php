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
class Krevet{
    public $duzina, $sirina, $materijal;
    //private $cena;
    protected $cena;

    public function __construct($duzina, $sirina, $materijal,$cena){
        $this->duzina= $duzina;
        $this->cena = $cena;
        $this->sirina = $sirina;
        $this->materijal = $materijal;
    }
    public function get_cena(){
        return $this->cena; 
    }
    public function __toString(){
        return "Krevet je duzine ". $this->duzina ." i sirine ".$this->sirina." napravljen od ".$this->materijal." po ceni ".$this->cena;
    }
    public function popust($popust){
    // $this-> popust = $popust;
        $prava = $this->cena - $this->cena * ($popust / 100);
        echo $prava;

    }
}
$pr1= new Krevet(190, 100, "drvo", 15000);
$pr2= new Krevet(200, 200, "drvo", 25000);
$pr3= new Krevet(200, 200, "drvo", 25000);
$pr3->popust(10);
echo "<br>";
if($pr1> $pr2){
    echo $pr1;
}else{
    echo $pr2;
}


    ?>
</body>
</html>