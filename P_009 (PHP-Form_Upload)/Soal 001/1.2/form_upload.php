<?php
if (isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $file_type = strtolower(pathinfo($target_file,
        PATHINFO_EXTENSION));

    $allowed_type = array('jpg', 'jpeg', 'gif', 'png');

    $maxFileSize = 5 * 1024 * 1024;

    if (in_array($file_type, $allowed_type) && $_FILES["fileToUpload"]
        ["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
            $target_file)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Sorry, there was an error uploading your file.\n";
        }

    } else {
        echo "Sorry, your file was not uploaded.\n";
    }
}