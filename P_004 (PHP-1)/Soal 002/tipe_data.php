<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br><br>";

var_dump($e);
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "Matematika : ($nilaiMatematika)<br><br>";
echo "IPA : ($nilaiIPA)<br>";
echo "<br><br>";
echo "Bahasa Indonesia : ($nilaiBahasaIndonesia)<br>";
echo "Rata-rata : ($rataRata)<br>";

var_dump($rataRata);

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

echo "<br><br>";
var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "<br><br>Nama Depan : {$namaDepan} <br>";
echo 'Nama Belakang :' . $namaBelakang . '<br>';

echo $namaLengkap;
$listMhahasiswa = [" Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMhahasiswa[0];
?>
