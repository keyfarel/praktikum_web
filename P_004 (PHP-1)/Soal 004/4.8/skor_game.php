<?php

$poin = 600;

$totalSkor = "Total skor pemain adalah: " . $poin;
$hadiahTambahan = ($poin > 500)
    ? "Pemain mendapat hadiah tambahan"
    : "Pemain tidak mendapat hadiah tambahan";

echo $totalSkor . "<br>";
echo $hadiahTambahan;
?>