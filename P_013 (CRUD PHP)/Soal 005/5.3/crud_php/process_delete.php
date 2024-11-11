<?php
global $conn;
include('connection.php'); // Pastikan file koneksi sudah di-include dengan benar

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : null;

if ($aksi == 'hapus') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM anggota WHERE id = $id"; // Perbaiki nama kolom menjadi `id`

        if (mysqli_query($conn, $query)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal menghapus data: " . mysqli_error($conn);
        }
    } else {
        echo "ID tidak valid.";
    }
} else {
    header("Location: index.php");
}

mysqli_close($conn);
