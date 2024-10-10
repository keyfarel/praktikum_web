<?php

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie';
$new_text = preg_replace($pattern, $replacement, $text);

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

echo "{$new_text} <br>";
