<?php
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamualaikum"){
    echo $salam . ", ";
    echo "Perkenalan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan anda <br/>";

    echo "Umur saya adalah " .
        hitungUmur(2005, 2024) . " tahun";
    echo "<Senang berkenalan dengan andabr/>";
}

perkenalan("Key");

?>