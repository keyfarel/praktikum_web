<?php
$hargaProduct = 120000;
$minPembelianPromo = 100.000;
$disc = 0.20;

if ($hargaProduct > $minPembelianPromo) {
    $hargaDisc = $hargaProduct * $disc;
    $hargaSetelahDisc = $hargaProduct - $hargaDisc;
    echo "Diskon product Rp " . $hargaDisc . "\n";
    echo "<br>Harga product Rp " . $hargaSetelahDisc;
} else {
    echo "Maaf anda tidak mendapatkan diskon";
    echo "<br>Harga product Rp " . $hargaProduct;
}
?>