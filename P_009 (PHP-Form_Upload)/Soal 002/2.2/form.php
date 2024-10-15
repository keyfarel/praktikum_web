<!doctype html>
<html lang="en">
<head>
    <title>File Upload</title>
</head>
<body>
<form action="form_upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple="multiple" accept=".jpg, .jpeg, .gif, .png"><br>
    <input type="submit" value="uploadFile" name="submit">
</form>
</body>
</html>