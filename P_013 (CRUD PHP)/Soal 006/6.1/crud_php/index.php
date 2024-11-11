<?php include 'auth.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>

    <!-- Csrf Token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmDCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">CRUD Dengan Ajax</a>
</nav>

<div class="container mt-5">
    <h2 class="text-center">Data Anggota</h2>

    <form method="post" class="form-data mt-4" id="form-data">
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="nama">Nama</label>
                <input type="hidden" name="id" id="id">
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                    <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" class="form-check-input" required>
                    <label class="form-check-label" for="jenkel1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="jenis_kelamin" id="jenkel2" value="P" class="form-check-input">
                    <label class="form-check-label" for="jenkel2">Perempuan</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="no_telp">No Telepon</label>
            <input type="number" name="no_telp" id="no_telp" class="form-control" required>
        </div>

        <div class="form-group">
            <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                <i class="fa fa-save"></i> Simpan
            </button>
        </div>
    </form>

    <hr>

    <div class="data"></div>
</div>

<footer class="text-center mt-5 mb-3">
    &copy; <?php echo date('Y'); ?> Desain Dan Pemrograman Web |
    <a href="https://google.com/">Desain Dan Pemrograman Web</a>
</footer>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- DataTable -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        // Mengirimkan Token Keamanan
        $.ajaxSetup({
            headers: {
                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.data').load("data.php");

        $('#example').DataTable();
    });
</script>
</body>
</html>