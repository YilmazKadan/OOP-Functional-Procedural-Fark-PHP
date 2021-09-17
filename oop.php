<?php

class muhasebe{
    private $maaslar = array();
    private $toplam = 0;
    public $zamMiktari = 0;

    public function __construct($maaslar , $zamMiktari = 0){
        $this->maaslar = $maaslar;
        $this->zamMiktari = $zamMiktari;
    }
    public function maasZamla(){
        foreach ($this->maaslar as $indis => $maas){
            $this->maaslar[$indis] += ($maas * $this->zamMiktari / 100);
        }
    }
    private function maasTopla(){
        foreach ($this->maaslar as $maas){
            $this->toplam += $maas;
        }
    }
    public function maaslar(){
        return $this->maaslar;
    }
    public function toplam(){
        $this->maasTopla();
        return $this->toplam;
    }
}

$muhasebe = new muhasebe([2000,3000,3500,4000,10000],10);
$muhasebe->zamMiktari = 100;
$muhasebe->maasZamla();
print_r($muhasebe->maaslar());
echo $muhasebe->toplam();