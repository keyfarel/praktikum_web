<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakwebdb";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Koneksi gagal: " . $con->connect_error);
} else {
    echo "Koneksi berhasil";
}
