<?php

// Herkesin  maaşlarına zam (Zam miktarı)
// Zamlı fiyattan bu ay personellere ödenecek toplam maaş

$maaslar = [2000,3000,3500,4000,10000];
$elemanSayisi = 5;
// Yüzdelik olarak maaş miktarı
$zamMiktari = 10;
$toplam = 0;

for($i=0;$i< $elemanSayisi;$i++){
    $maaslar[$i] = $maaslar[$i] + $maaslar[$i] * ($zamMiktari/100);
}
for($i=0;$i< $elemanSayisi;$i++){
    $toplam += $maaslar[$i];
}

for($i=0;$i< $elemanSayisi;$i++){
    echo "\n{$maaslar[$i]}";
}

echo "\n{$toplam}";