<?php

$conn = mysqli_connect("localhost", "root", "", "prakwebdb");

if (mysqli_connect_errno()) {
    die("Koneksi gagal: " . mysqli_connect_error());
}