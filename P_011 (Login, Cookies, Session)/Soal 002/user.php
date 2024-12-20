<?php

global $dbname, $con;
include 'conection.php';

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($con->query($sql) === TRUE) {
    echo "<br>Database $dbname berhasil dibuat atau sudah ada.<br>";
} else {
    echo "Error membuat database: " . $con->error;
}

$con->select_db($dbname);

$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";

if ($con->query($sql) === TRUE) {
    echo "Tabel `user` berhasil dibuat atau sudah ada.";
} else {
    echo "Error membuat tabel: " . $con->error;
}

$con->close();