<?php
global $con;

include 'conection.php';

$username = "key";
$password = "key";

$sql = "INSERT INTO user (username, password) 
VALUES ('$username', '$password')";

if ($con->query($sql) === TRUE) {
    echo "<br>Data user berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();