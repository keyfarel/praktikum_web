<?php
global $conn;
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $query = "SELECT * FROM anggota WHERE id = ?";
    $sql = $conn->prepare($query);
    $sql->bind_param("i", $id);
    $sql->execute();
    $result = $sql->get_result()->fetch_assoc();

    if ($result) {
        echo json_encode($result);
    } else {
        echo json_encode(['error' => 'Data tidak ditemukan']);
    }

    $conn->close();
} else {
    echo json_encode(['error' => 'Metode tidak valid']);
}
