<?php
$daftarNilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$siswaDiAtasRerata = [];

echo "<pre>";

foreach ($daftarNilaiSiswa as $nilai) {
    print_r($nilai);
    echo "<br>";
}

echo "</pre>";
$totalNilai = 0;
foreach ($daftarNilaiSiswa as $nilai) {
    $totalNilai += $nilai[1];
}

$nilaiRerata = $totalNilai / count($daftarNilaiSiswa);

foreach ($daftarNilaiSiswa as $siswa) {
    if ($siswa[1] > $nilaiRerata) {
        $siswaDiAtasRerata[] = $siswa[0];
    }
}

echo "Siswa yang mendapatkan nilai lebih dari $nilaiRerata adalah: 
<br>" . implode(", ", $siswaDiAtasRerata);

?>