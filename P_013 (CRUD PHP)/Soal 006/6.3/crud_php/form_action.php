<?php
global $conn;
session_start();
include 'connection.php';

if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    echo json_encode(['error' => 'Invalid CSRF token']);
    exit();
}

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES);
$alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
$no_telp = htmlspecialchars($_POST['no_telp'], ENT_QUOTES);

if ($id) {
    $query = "UPDATE anggota SET nama = ?, jenis_kelamin = ?, alamat = ?, no_telp = ? WHERE id = ?";
    $sql = $conn->prepare($query);
    $sql->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $no_telp, $id);
} else {
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $sql = $conn->prepare($query);
    $sql->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $no_telp);
}

if ($sql->execute()) {
    echo json_encode(['success' => 'Data berhasil disimpan']);
} else {
    echo json_encode(['error' => 'Gagal menyimpan data']);
}

$conn->close();
