<?php
if (isset($_POST["submit"])) {
    $target_dir = "uploads/";

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    if ($_FILES['files']['name'][0]) {
        $total = count($_FILES['files']['name']);

        for ($i = 0; $i < $total; $i++) {
            $filename = $_FILES['files']['name'][$i];
            $target_file = $target_dir . $filename;

            if (move_uploaded_file($_FILES['files']['tmp_name'][$i],
                $target_file)) {
                echo "file $filename berhasil di upload <br>";

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}