<?php
ob_start();
include('connection.php');
global $conn;

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : null;

if ($aksi == 'ubah') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];

        $query = "UPDATE anggota SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' WHERE id=$id";

        if (mysqli_query($conn, $query)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal mengupdate data: " . mysqli_error($conn);
        }
    } else {
        echo "ID tidak valid.";
    }
}

mysqli_close($conn);
ob_end_flush();
