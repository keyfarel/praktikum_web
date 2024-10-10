<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
    <script>
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body>
<h2>Form Input PHP</h2>

<?php
$namaErr = "";
$nama = "";
$showAlert = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
        $showAlert = true;
    } else {
        $nama = $_POST["nama"];
    }
}

if ($showAlert) {
    echo "<script>showAlert('Nama harus diisi!');</script>";
} else {
    echo "<script>showAlert('Data berhasil disimpan');</script>";
}
?>

<form method="post" action="
<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nama">Nama: </label>
    <input type="text" name="nama" id="nama" value="
    <?php echo $nama; ?>">
    <span class="error"><?php echo $namaErr; ?></span><br><br>

    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
