<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah File Dokumen</title>
</head>
<body>
<form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file"><br><br>
    <input type="submit" name="submit" value="submit">
</form>
<div id="status"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="upload.js"></script>
</body>
</html>