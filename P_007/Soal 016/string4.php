<?php
$pesan = "saya arek amlang";

echo $pesan . "<br>";

$pesanPerkata = explode(" " , $pesan);

echo "<pre>";
print_r($pesanPerkata);
echo "</pre><br>";

$pesanPerkata = array_map(fn($pesan)
=> strrev($pesan), $pesanPerkata);

echo "<pre>";
print_r($pesanPerkata);
echo "</pre><br>";

$pesan = implode (" ", $pesanPerkata);

echo $pesan . "<br>";