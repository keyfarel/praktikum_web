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

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<hr>Jumlah buah yang akan dipanen adalah: $jumlahBuah";

?>