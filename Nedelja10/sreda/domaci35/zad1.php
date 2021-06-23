<?php
class Agencija(){
    public $conn;

    function __construct($baza){
        $this->conn = mysqli('localhost', 'root', '', $baza){
            if($this->conn->connect_error){
                die("Greska:".$this->conn->connect_error);
            }else{
                echo"Konektovan";
            }
        }
    }
    function izvrsi_select($upit){
        $podaci = $this->conn->query($upit);
        if( $podaci == false){
            return ['uspesno'=> false, 'poruka'=>$this->conn->error];
        }else{
            $niz = $podaci->fetch_all(MYSQLI_ASSOC);
            return ['uspesno'=>true, ['niz'=>$niz];
        }
    }
    function daj_id($grad, $drzava){
        $p =$this->izvrsi_select("SELECT id_destinacije FROM destinacije WHERE grad='$grad' and drzava='$drzava'");
        if($p['uspesno'] == true){
            return $p['niz'][0];
        }else{
            die("neuspesan upit.".$p['poruka']);
        }
    }
    function daj_putovanja($id_destinacije){
        $p =$this->izvrsi_select("SELECT * FROM  putovanja JOIN destinacije ON putovanja.destinacija_id=destinacije.id_destinacije WHERE id_destinacije='$id_destinacije'");
        if($p['uspesno'] == true){
            return $p['niz'];
        }else{
            die("neuspesan upit.".$p['poruka']);
        }
    }
     function obrisi_aranzmane($id_putovanja){
         $this->izvrsi_select("DELETE FROM spisak_putnika WHERE id_destinacije='$id_destinacije'");
     }

}
$p= new Agencija();
$p->daj_id("Barselona", "Spanija");
$p->daj_putovanja(2);
$p->obrisi_aranzmane(2);


?>