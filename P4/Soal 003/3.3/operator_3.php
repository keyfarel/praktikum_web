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

$hasilSama = $a == $b;
$hasilTidaksama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo("<hr> Jika 1 maka true, 0 atau () maka false<br>");
echo("a == b  : ($hasilSama)</br>");
echo("a != b  : ($hasilTidaksama)</br>");
echo("a < b   : ($hasilLebihKecil)</br>");
echo("a > b   : ($hasilLebihBesar)</br>");
echo("a <= b  : ($hasilLebihKecilSama)</br>");
echo("a >= b  : ($hasilLebihBesarSama)</br>");

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo ("<hr> Jika 1 maka true, 0 atau () maka false<br><br>");
echo ("a: $a <br>
       b: $b<br><br>");
echo ("Hasil AND dari $a dan $b : $hasilAnd<br>");
echo ("Hasil OR dari $a dan $b : $hasilOr<br>");
echo ("Hasil NOT $a (nilai $b) : $hasilNotA<br>");
echo ("Hasil NOT $b (nilai $a) : $hasilNotB<br>");
?>