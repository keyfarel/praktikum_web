<?php
global $conn;
include('connection.php');

$aksi = $_GET['aksi'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

if ($aksi == 'tambah') {
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";

    if (mysqli_query($conn, $query)) {
        header("Location: index.connection");
        exit();
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
