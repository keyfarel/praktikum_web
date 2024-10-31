<?php
session_start();

if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
    echo "<br>Selamat datang, " . $_SESSION['username'];
    ?>
    <br><a href="sessionLogout.php">Log Out</a>
    <?php
} else {
    echo "<br>Anda belum login. Silahkan ";
    ?>
    <br><a href="../index.html">Log In</a>
    <?php
}
?>
</body>
</html>
