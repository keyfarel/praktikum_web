<?php
const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DATABASE = "prakwebdb";

$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

if (mysqli_connect_errno()) {
    die("Koneksi gagal: " . mysqli_connect_error());
}