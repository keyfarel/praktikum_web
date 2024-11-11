<?php
global $conn;
session_start();
include 'connection.php';

// Periksa apakah CSRF token valid
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    echo json_encode(['error' => 'Invalid CSRF token']);
    exit();
}

// Sanitasi dan validasi input
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

// Query untuk memasukkan data ke database
$query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
$sql = $conn->prepare($query);
$sql->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $no_telp);

if ($sql->execute()) {
    echo json_encode(['success' => 'Data berhasil disimpan']);
} else {
    echo json_encode(['error' => 'Gagal menyimpan data']);
}

$conn->close();
