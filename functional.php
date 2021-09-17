<?php 


$zamMiktarı = 0;
$maaslar = [2000,3000,3500,4000,10000];
// Yüzdelik olarak maaş miktarı
$zamMiktari = 10;

muhasebe($maaslar, $zamMiktari);


function muhasebe($maaslar = array(), $zamMiktari){
    maasYazdir($maaslar);
    echo "\n". maasYazdir(zamEkle($maaslar, $zamMiktari,count($maaslar)));
    echo maasToplami(zamEkle($maaslar, $zamMiktari,count($maaslar)));
}
function zamEkle($maaslar , $zamMiktari,$elemanSayisi){
    for($i=0;$i < $elemanSayisi;$i++){
        $maaslar[$i] = $maaslar[$i] + $maaslar[$i] * ($zamMiktari/100);
    }
    return $maaslar;
}
function maasYazdir($array){
    print_r($array);
}
    
function maasToplami($array){
    $toplam = 0;
    for($i=0;$i<5;$i++){
        $toplam += $array[$i];
    }
    return $toplam;
}
// Ana muhasebe fonksiyonu
// Eleman sayısını bulan fonksiyon veya hazır fonksiyon 
// Maaşları ekrana yazdırma fonksiyonu
// Toplamı bulan fonksiyon