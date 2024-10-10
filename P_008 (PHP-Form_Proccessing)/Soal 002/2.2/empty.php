<?php

$myArray = array();
if (empty($myArray)) {
    echo "Array tidak terdefenisi atau kosong.<br>";
} else {
    echo "Array terdefenisi dan tidak kosong.<br>";
}

if (empty($nonExistentVariable)) {
    echo "Variable tidak terdefinisi atau kosong.<br>";
} else{
    echo "Variable terdeteksi dan tidak kosong.<br>";
}