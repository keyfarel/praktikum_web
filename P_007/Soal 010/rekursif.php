<?php
function tampilkanAngka($jumlah, $idx = 1){
    echo "Perulangan ke-: {$idx}<br>";

    if ($idx < $jumlah) {
        tampilkanAngka($jumlah, $idx + 1);
    }
}

tampilkanAngka(20);