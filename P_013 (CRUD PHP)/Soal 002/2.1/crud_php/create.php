<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Tambah Data Anggota</h2>
    <form action="process.php?aksi=tambah" method="post">
        <br><label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <div class="radio-group">
            <label for="jk">Jenis Kelamin</label><br>
            <label>
                <input type="radio" name="jenis_kelamin" value="L" id="laki" required> Laki-laki
            </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="P" id="perempuan" required> Perempuan
            </label>
        </div>

        <br><label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required>

        <br><label for="no_telp">No. Telp:</label>
        <input type="text" name="no_telp" id="no_telp" required>

        <br>
        <button type="submit">Simpan Data</button>
        <a href="index.php" class="btn-kembali">Kembali</a>
    </form>
</div>
</body>
</html>
