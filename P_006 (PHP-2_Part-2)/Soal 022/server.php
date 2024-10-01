<?php
echo "Nama file saat ini: " . $_SERVER['PHP_SELF'];
echo "<br>";

echo "Nama server: " . $_SERVER['SERVER_NAME'];
echo "<br>";

echo "Host yang digunakan: " . $_SERVER['HTTP_HOST'];
echo "<br>";

if (isset($_SERVER['HTTP_REFERER'])) {
    echo "Halaman pengarah (referer): "
        . $_SERVER['HTTP_REFERER'];
    echo "Halaman pengarah (referer): Tidak ada referer";
}
echo "<br>";

echo "User agent (browser): " . $_SERVER['HTTP_USER_AGENT'];
echo "<br>";

echo "Nama skrip: " . $_SERVER['SCRIPT_NAME'];
echo "<br>";
