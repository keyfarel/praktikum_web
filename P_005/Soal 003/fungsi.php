<?php
function perkenalan($nama, $salam= "Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda <br/>";
}

perkenalan("Hamdana","Halo");

echo "<hr>";

$saya = "Key";
$ucapSalam = "Selamat pagi";

perkenalan($saya, $ucapSalam);