<?php
session_start();

if(!isset($_SESSION['stavke_korpe']));
$_SESSION['stakve_korpe'] =[];
class Korpa{
public $stavke_korpe;
function __construct(){
    $this->stavke_korpe = $_SESSION['stavke_korpe'];
}
function dodaj_proizvod($id, $naziv, $cena, $kolicina){
    $nasao = false;
    for($i=0; $i<count($this->stavke_korpe); $i++){
        if($this->stavke_korpe[$i]['id'] == $id){
            $this->promeni_kolicinu($id, $kolicina);
            $nasao = true;
            break;
        }
    }
    if(!$nasao == false){}
        $nova_stavka =['id'=>$id, 'naziv'=>$naziv, 'cena'=>$cena, 'kolicina'=>$kolicina ];
        array_push($this->stavke_korpe, $nova_stavka);
    }
    $_SESSION['stavke_korpe'] = $this->stavke_korpe;
}
function promeni_kolicinu($id, $kol){
    for($i=0; $i<count($this->stavke_korpe); $i++){
        if($this->stavke_korpe[$i]['id'] == $id){
            $this->stavke_korpe[$i]['kolicina'] +=$kol;
        }
        $_SESSION['stavke_korpe'] = $this->stavke_korpe;
}
function obrisi_proizvod($id){
    for($i=0; $i<count($this->stavke_korpe); $i++){
        if($this->stavke_korpe[$i]['id'] == $id){
            array_splice($this->stavka_korpe, $i, 1);
            return;
        }
    }
    $_SESSION['stavke_korpe'] = $this->stavke_korpe;
}
function prikazi(){
    echo "<table>";
    for($i=0; $i<count($this->stavke_korpe); $i++){
        echo "<tr>";
        echo "<td>". $this->stavke_korpe[$i]['naziv']."</td>";
        echo "<td>". $this->stavke_korpe[$i]['cena']."</td>";
        echo "<td>". $this->stavke_korpe[$i]['kolicina']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
}

$k = new Klasa();
$k->dodaj_proizvod(1, "N1", 100, 2);
$k->dodaj_proizvod(2, "N2", 200, 5);
$k->dodaj_proizvod(3, "N3", 200, 5);
$k->obrisi_proizvod(3);
$k->prikazi();
$k->promeni_kolicinu(2,5);
$k->prikazi();


?>