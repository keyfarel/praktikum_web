<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"],
        ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"],
        ENT_QUOTES, 'UTF-8');
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email;
    } else {
        echo "Email tidak valid. Silahkan masukan email yang benar<br>";
    }
}
