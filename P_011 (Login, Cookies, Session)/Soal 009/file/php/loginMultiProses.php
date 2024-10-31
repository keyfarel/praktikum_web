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
$row = mysqli_fetch_assoc($result);

if ($cek > 0) {
    if ($row['level'] == 1) {
        echo "<br>Anda berhasil login.
<br>Silakan menuju <a href='../html/homeAdmin.html'>Halaman HOME</a>";
    } elseif ($row['level'] == 2) {
        echo "<br>Anda berhasil login.
<br>Silakan menuju <a href='../html/homeSession.php'>Halaman HOME</a>";
    } else {
        echo "<br>Level pengguna tidak diketahui.";
    }
} else {
    echo "<br>Anda gagal login.
<br>Silakan <a href='../../index.html'>Login kembali</a>";
}

if (mysqli_error($con)) {
    echo "<br>Error: " . mysqli_error($con);
}

mysqli_close($con);