<?php

$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai Numerik: {$nilaiNumerik}
    <br><br>Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 90) {
    echo "Nilai Numerik: {$nilaiNumerik}
    <br><br>Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 80) {
    echo "Nilai Numerik: {$nilaiNumerik}
    <br><br>Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai Numerik: {$nilaiNumerik}
    <br><br>Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<hr>Atlet tersebut memerlukan " .
    "$hari hari untuk mencapai jarak 500 kilometer.";

?>