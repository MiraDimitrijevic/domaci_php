<?php

class KomadOdece{

    private $id;
    private $naziv;
    private $opis; 
    private $velicina;
    private $cena;
    private $slika;

    public function __construct($id=null, $naziv=null, $opis=null,   $velicina=null,$cena=null,$slika=null)
    {
        $this->id=$id;
        $this->naziv=$naziv;
        $this->opis=$opis; 
        $this->velicina=$velicina;
        $this->cena=$cena;
        $this->slika=$slika;

    }


   

}


?>