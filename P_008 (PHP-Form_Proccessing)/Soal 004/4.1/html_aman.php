<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"],
        ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"],
        ENT_QUOTES, 'UTF-8');

    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
