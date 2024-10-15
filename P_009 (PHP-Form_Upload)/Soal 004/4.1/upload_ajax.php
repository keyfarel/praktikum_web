<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");

    if (!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }

    $total_files = count($_FILES['file']['name']);

    for ($i = 0; $i < $total_files; $i++) {
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "Sorry, only JPG, JPEG, PNG, and GIF files are allowed: $file_name";
            continue;
        }

        if ($file_size > 2097152) {
            $errors[] = "Sorry, the file $file_name is too large (max 2MB).";
            continue;
        }

        if (empty($errors)) {
            $target_file = "uploads/" . basename($file_name);
            if (move_uploaded_file($file_tmp, $target_file)) {
                echo "File $file_name berhasil diunggah.<br>";
            } else {
                $errors[] = "Terjadi kesalahan saat mengunggah file $file_name.";
            }
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
