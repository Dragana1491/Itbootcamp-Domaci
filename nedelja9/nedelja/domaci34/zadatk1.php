<?php
class Baza{
public $conn;
function __construct($baza){
    $this->conn = new mysqli('localhost', 'root', '', $baza);
    if ($this->conn->connect_error)
	die ('Greska: '. $this->conn->connect_error);
else
	echo 'Konektovan!';
    }
}


function izvrsi_select($upit){
$podaci= $this->conn->query($upit);
    if($podaci === false){
        return ['uspesno'=> false, 'poruka'=>$this->conn->error];
    }else{
        $niz = $podaci->fetch_all(MYSQLI_ASSOC);
        return['uspesno'=> true, 'niz'=>$niz]; 
    }
}
function prikazi_destinacije(){
$p = $this=>izvrsi_select("SELECT putovanja.datum_polaska, putovanja.datum_povratka,destinacije.drzava, destinacije.grad FROM `putovanja` JOIN destinacije ON putovanja.destinacija_id=destinacije.id_destinacije");
    if ($p['uspesno'] == true){
        echo $p['niz'];
    }else{
        die ("nesuspesan upit:".$p['poruka']);
    }
}

function prikazi_putnike(){
    $p = $this=>izvrsi_select(SELECT CONCAT(putnici.ime, " ",putnici.prezime), putovanja.datum_polaska, putovanja.datum_povratka, destinacije.drzava, destinacije.grad 
    FROM (`putnici` JOIN `spisak_putnika` ON putnici.broj_pasosa=spisak_putnika.broj_pasosa)
    JOIN (`putovanja` JOIN destinacije ON putovanja.destinacija_id=destinacije.id_destinacije) ON putovanja.id=spisak_putnika.id_putovanja);
        if($p['uspesno'] == true){
            echo $p['niz'];
        }else{
            die("neuspesan upit:".$p['poruka']);
        }
}

function otkazi_rezervaciju($br_pasosa){
    $p=$this=>izvrsi_select(DELETE FROM `spisak_putnika` WHERE broj_pasosa=$br_pasosa);
        if($p['uspesno'] == true){
            return $p['niz'];
        }else{
            die ("neuspesan upit:".$p['poruka']);
        }
}


}
$b = new Baza('agencija');
?<