<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
rsort($nilaiSiswa);
array_splice($nilaiSiswa, 0, 2);
array_splice($nilaiSiswa, -2);
$nilaiTotal = 0;

foreach ($nilaiSiswa as $nilai) {
    $nilaiTotal += $nilai;
}

echo "Total nilai dari 10 siswa dengan mengabaikan
 dua nilai tertinggi dan dua terendah adalah: $nilaiTotal";
echo "<br> Nilai rata-rata dari nilai siswa tersebut adalah: "
    . $nilaiTotal / count($nilaiSiswa);
?>