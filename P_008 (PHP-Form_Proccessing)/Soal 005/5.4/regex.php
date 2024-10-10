<?php

$pattern = '/go*d/';
$text = 'god is good';

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan<br>";
} else {
    echo "Tidak ada huruf kecil<br>";
}

if (preg_match_all($pattern, $text, $matches)) {
    echo "Cocokan: " . implode(", ", $matches[0]) . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}
