<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Form Input dengan Validasi</h1>
<form id="myForm" method="post" action="logic_validasi.php">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>

    <input type="submit" value="Submit">
</form>

<div id="response"></div> <!-- Tempat untuk menampilkan respon dari server -->

<script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Mencegah pengiriman form secara default

            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true;

            // Validasi Nama
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            // Validasi Email
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            // Jika validasi berhasil
            if (valid) {
                // Mengirim data form menggunakan AJAX
                $.ajax({
                    url: "logic_validasi.php", // Ganti dengan URL file PHP yang memproses form
                    type: "POST",
                    data: {
                        nama: nama,
                        email: email
                    },
                    success: function(response) {
                        // Tampilkan respon dari server di div "response"
                        $("#response").html(response);
                    },
                    error: function(xhr, status, error) {
                        // Tampilkan pesan error jika request gagal
                        $("#response").html("Terjadi kesalahan: "
                            + error);
                    }
                });
            }
        });
    });
</script>
</body>
</html>
