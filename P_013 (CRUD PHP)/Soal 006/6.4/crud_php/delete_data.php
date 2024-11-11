<?php
global $conn;
session_start();
include 'connection.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Validasi ID
    if (empty($id)) {
        echo json_encode(['error' => 'ID tidak valid']);
        exit();
    }

    // Eksekusi penghapusan data
    $query = "DELETE FROM anggota WHERE id = ?";
    $sql = $conn->prepare($query);
    $sql->bind_param("i", $id);

    if ($sql->execute()) {
        echo json_encode(['success' => 'Data berhasil dihapus']);
    } else {
        echo json_encode(['error' => 'Gagal menghapus data']);
    }

    $conn->close();
} else {
    echo json_encode(['error' => 'Metode tidak valid']);
}
