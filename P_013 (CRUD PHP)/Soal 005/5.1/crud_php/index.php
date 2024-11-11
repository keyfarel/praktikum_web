<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Data Anggota</h2>
        <a class="btn btn-success" href="create.php">Tambah Data</a>
    </div>
    <hr>

    <?php
    global $conn;
    include('connection.php');
    $query = "SELECT * FROM anggota ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    ?>

    <table class="table table-striped table-hover mt-4">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No. Telp</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $kelamin = ($row["jenis_kelamin"] == 'L') ? 'Laki-Laki' : 'Perempuan';
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($row["nama"]) ?></td>
                <td><?= htmlspecialchars($kelamin) ?></td>
                <td><?= htmlspecialchars($row["alamat"]) ?></td>
                <td><?= htmlspecialchars($row["no_telp"]) ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="update.php?id=<?= $row["id"] ?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#hapusModal<?= $row["id"] ?>">Hapus</a>
                </td>
            </tr>

            <!-- Modal Hapus -->
            <div class="modal fade" id="hapusModal<?= $row["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= "Apakah Anda yakin ingin menghapus data dengan nama <strong>" . htmlspecialchars($row["nama"]) . "</strong>?" ?>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-danger" href="process_delete.php?aksi=hapus&id=<?= $row["id"] ?>">Hapus</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
