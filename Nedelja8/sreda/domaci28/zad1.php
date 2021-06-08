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
/*Napraviti klasu Baldahin (slika ispod) koja nasledjuje klasu Krevet iz domaceg broj 27, i prosiruje clanicama visina i cenaBaldahina. (odvojena cena samo za dodatak)
Napraviti konstruktor koji poziva roditeljski konstruktor i upisuje podatke i u nove dve clanice

Metoda __toString, ne poziva roditeljski __toString, vec prikazuje dve cene. Cenu kreveta bez baldahina i sa baldahinom (zbirno). 
(Posto je cena u klasi Proizvod private, da bi joj se iz klase Baldahin moglo pristupiti treba ili a) uvesti protected ili b) dodati metodu "daj_cenu")
*/
class Krevet{
    public $duzina, $sirina, $materijal;
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
    public __toString(){
        echo "Krevet je duzine".$this->duzina."i sirine".$this->duzina."napravljen od".$this->materijal."po ceni".$this->cena;
    }
    public function popust($popust){
        // $this-> popust = $popust;
        $prava = this->cena - this->cena*($popust / 100);
        echo $prava;
    }
}


class Baldahin extends Krevet{
    public $visina, $cenaBaldahina;
        function __construct($duzina, $sirina, $materijal,$cena, $visina, $cenaBaldahina);
            parent:: __construct($duzina, $sirina, $materijal,$cena);
            $this->visina = $visina; 
            $this->cenaBaldahina = $cenaBaldahina;
        }
        function __toString(){
            echo parent:: $cena;
            echo $zbirna_cena = $this->cena + $this->cenaBaldahina;
        }

}

    ?>
</body>
</html>