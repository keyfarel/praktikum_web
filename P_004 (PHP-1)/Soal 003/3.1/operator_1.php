<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo("<b>Hasil penggunaan operator</b><hr>");
echo("Penjumlahan dari $a dan $b : {$hasilTambah}<br>");
echo("Pengurangan dari $a dan $b : {$hasilKurang}<br>");
echo("Perkalian dari $a dan $b : {$hasilKali}<br>");
echo("Pembagian dari $a dan $b : {$hasilBagi}<br>");
echo("Sisa bagi dari $a dan $b : {$sisaBagi}<br>");
echo("Perpangkatan dari $a dan $b : {$pangkat}<br>");
?>