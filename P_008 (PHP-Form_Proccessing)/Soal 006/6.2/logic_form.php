<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = $_POST['buah'];

    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }

    echo "Anda memilih buah: " . $selectedBuah . "<br>";

    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . implode(", ",
                $selectedWarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    if (isset($_POST['jenis_kelamin'])) {
        $selectedJenisKelamin = $_POST['jenis_kelamin'];
        echo "Jenis kelamin Anda: " . $selectedJenisKelamin . "<br>";
    } else {
        echo "Anda tidak memiliki kelamin.<br>";
    }
}
