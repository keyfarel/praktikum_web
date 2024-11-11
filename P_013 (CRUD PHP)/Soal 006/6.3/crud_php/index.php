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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" crossorigin="anonymous">
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
                <p class="text-danger" id="err_nama"></p>
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
                <p class="text-danger" id="err_jenis_kelamin"></p>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" required></textarea>
            <p class="text-danger" id="err_alamat"></p>
        </div>

        <div class="form-group">
            <label for="no_telp">No Telepon</label>
            <input type="number" name="no_telp" id="no_telp" class="form-control" required>
            <p class="text-danger" id="err_no_telp"></p>
        </div>

        <div class="form-group">
            <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                <i class="fa fa-save"></i> Simpan
            </button>
        </div>
    </form>

    <hr>

    <div class="data"></div>
    <input type="hidden" name="id" id="id"> <!-- Hidden field untuk ID data yang akan diedit -->

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
        setInterval(function () {
            $('.data').load("data.php");
        }, 5000);
        // Load data anggota dari data.php ke dalam div .data
        $('.data').load("data.php");

        // Fungsi untuk menyimpan atau mengupdate data saat tombol #simpan diklik
        $("#simpan").click(function () {
            var data = $('.form-data').serialize() + "&csrf_token=" + $('meta[name="csrf-token"]').attr('content');
            var nama = $("#nama").val();
            var alamat = $("#alamat").val();
            var no_telp = $("#no_telp").val();
            var jenkel1 = $("#jenkel1").prop("checked");
            var jenkel2 = $("#jenkel2").prop("checked");

            // Validasi form input
            if (nama === "") {
                $("#err_nama").text("Nama Harus Diisi");
            } else {
                $("#err_nama").text("");
            }

            if (alamat === "") {
                $("#err_alamat").text("Alamat Harus Diisi");
            } else {
                $("#err_alamat").text("");
            }

            if (!jenkel1 && !jenkel2) {
                $("#err_jenis_kelamin").text("Jenis Kelamin Harus Dipilih");
            } else {
                $("#err_jenis_kelamin").text("");
            }

            if (no_telp === "") {
                $("#err_no_telp").text("No Telepon Harus Diisi");
            } else {
                $("#err_no_telp").text("");
            }

            // Jika validasi berhasil, kirim data ke server
            if (nama !== "" && alamat !== "" && (jenkel1 || jenkel2) && no_telp !== "") {
                $.ajax({
                    type: 'POST',
                    url: "form_action.php",
                    data: data,
                    success: function (response) {
                        console.log(response); // Display response in console
                        if (response.success) {
                            $('.data').load("data.php");
                            $("#form-data")[0].reset();
                        } else {
                            alert(response.error);
                        }
                    },
                    error: function (response) {
                        console.log(response.responseText);
                    }
                });
            }
        });

        // Fungsi untuk menangani tombol edit
        // Fungsi untuk menangani tombol edit
        $(document).on("click", ".edit_data", function () {
            var id = $(this).attr("id");
            $.ajax({
                url: "get_data.php",
                method: "POST",
                data: {id: id},
                dataType: "json",
                success: function (data) {
                    if (data) {
                        $("#id").val(data.id);
                        $("#nama").val(data.nama);
                        $("#alamat").val(data.alamat);
                        $("#no_telp").val(data.no_telp);
                        if (data.jenis_kelamin === "L") {
                            $("#jenkel1").prop("checked", true);
                        } else {
                            $("#jenkel2").prop("checked", true);
                        }
                    } else {
                        alert("Gagal mengambil data.");
                    }
                },
                error: function () {
                    alert("Terjadi kesalahan saat mengambil data.");
                }
            });
        });
    });

</script>

</body>
</html>