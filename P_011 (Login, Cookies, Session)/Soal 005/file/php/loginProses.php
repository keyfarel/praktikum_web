<?php
global $con;
include "conection.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user 
         WHERE username='$username'
                     AND password='$password'";

$result = mysqli_query($con, $query);
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    echo "<br>Anda berhasil login. Silakan menuju ";
    echo '<a href="../html/homeAdmin.html">Halaman HOME</a>';
} else {
    echo "<br>Anda gagal login.<br> Silakan ";
    echo '<a href="../../index.html">Login kembali</a>';
    echo "<br>Error: " . mysqli_error($con);
}