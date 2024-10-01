<?php
$kursiKosong = 45;
$kursiDitempati = 28;
$sisaKursi = $kursiKosong - $kursiDitempati;
$presentaseKursi = $sisaKursi / $kursiKosong * 100;
echo "Sisa kursi adalah " . $sisaKursi . "<br>";
echo "Presentase kursi yang masih kosong adalah "
    . $presentaseKursi . "%<br>";
?>