<?php
global $con;
include "conection.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * 
        FROM user 
        WHERE username='$username'
        AND password='$password'";
$result = mysqli_query($con, $sql);
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    echo "<br>Anda Berhasil Login, silahkan menuju 
          <br><a href='homeSession.php'>Halaman Home</a>";
} else {
    echo "<br>Gagal login, silahkan login lagi 
          <br><a href='../index.html'>Halaman Login</a>";
    echo mysqli_error($con);
}

