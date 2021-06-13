<?php
class SastojakHrane{
    public $naziv, $mera, $kalorije;

    function __construct($naziv, $mera, $kalorije){
        $this->naziv = $naziv;
        $this->mera = $mera;
        $this->kalorije = $kalorije;

    }
    function promeniMeru($nmera){
        $this->mera =$nmera;


    }
    function prikazi(){
        echo "<p>";
        echo $this->naziv;
        echo $this->mera;
        echo $this->kalorije ;
        echo "</p>";
    }
}

class Jelo{
    public $naslov, $opis, $podaci;
    function __construct($naslov, $opis, $podaci){
        $this->naslov = $naslov;
        $this->opis = $opis;
        $this->podaci =  
        for($i=0; $i<count($podaci); $i++){
            $sastojak = new SastojakHrane($podaci[$i]);
            array_push($this->podaci, $sastojak);
    }
   
        for($i=0; $i<count($podaci); $i++){
            $sastojak = new SastojakHrane($podaci[$i]);
            array_push($this->podaci, $sastojak);
       

    function prikazi(){
        for($i=0; $i<count($this->podaci); $i++){
           $this->podaci[$i]->prikazi();

    }
    function promeniMeru_jednog_sastojka($naziv, $nmera){
        for($i=0; $i<count($this->podaci); $i++){
        if ($this->naziv == $naziv){
            $this->podaci[$i]-> promeniMeru($nmera);
        }
        }
    }
}

$podaci = [
	["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
	["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
	["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
	["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
]
$jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
$jelo->prikazi();
$jelo->promeniMeru("brasno", "400g");
$jelo->prikazi();


?>