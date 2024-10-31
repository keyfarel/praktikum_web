<?php
$response = "";

if (isset($_GET['nama']) && $_GET['nama'] !== "") {
    $nama = strtolower($_GET['nama']);
    $count = substr_count($nama, 'a');
    $response .= "<div class='result-card'>";
    $response .= "<h3>Hasil untuk Nama</h3>";
    $response .= "<p>Nama yang dimasukkan: " . htmlspecialchars($_GET['nama']) . "</p>";
    $response .= "<p>Jumlah huruf 'a' yang muncul: $count</p>";
    $response .= "</div>";
}

if (isset($_GET['gaji']) && $_GET['gaji'] !== "") {
    $gaji = $_GET['gaji'];
    $digitCount = strlen(preg_replace('/\D/', '', $gaji));
    $response .= "<div class='result-card'>";
    $response .= "<h3>Hasil untuk Gaji</h3>";
    $response .= "<p>Gaji yang dimasukkan: " . htmlspecialchars($gaji) . "</p>";
    $response .= "<p>Jumlah digit dari gaji: $digitCount</p>";
    $response .= "</div>";
}

if ($response === "") {
    $response = "<div class='result-card'><p>Tidak ada data yang dimasukkan.</p></div>";
}

echo $response;