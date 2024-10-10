<?php

$pattern = '/[0-9]/';
$text = 'There are 123 apples';

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan<br>";
} else {
    echo "Tidak ada huruf kecil<br>";
}

if (preg_match_all($pattern, $text, $matches)) {
    echo "Cocokan: " . implode(", ", $matches[0]) . "\n";
} else {
    echo "Tidak ada yang cocok!<br>";
}
