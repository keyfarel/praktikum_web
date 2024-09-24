<!doctype html>
<html lang="en">
<head>
</head>
<body>
<form method="post"
      action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fname"];
    if ($name == "") {
        echo "Name is required";
    } else {
        echo $name;
    }
}
?>
</body>
</html>