<?php
if (isset($_POST["submit"])) {
    $target_dir = "uploads/";
    if (isset($_FILES["fileToUpload"])
        && $_FILES["fileToUpload"]["error"] == 0) {
        $target_file = $target_dir
            . basename($_FILES["fileToUpload"]["name"]);
        $file_type = strtolower(pathinfo($target_file,
            PATHINFO_EXTENSION));

        $allowed_type = array('jpg', 'jpeg', 'gif', 'png');
        $maxFileSize = 5 * 1024 * 1024;

        if (in_array($file_type, $allowed_type)
            && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
                $target_file)) {
                echo "File is valid, and was successfully uploaded.<br>";
                createThumbnail($target_file, $file_type,
                    $target_dir . 'thumb_'
                    . basename($_FILES["fileToUpload"]["name"]));
                echo "Thumbnail created successfully.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, your file was not uploaded.
             Only JPG, JPEG, PNG, and GIF files under 5MB are allowed.";
        }
    } else {
        echo "No file uploaded or an error occurred during the file upload.";
    }
}

function createThumbnail($filepath, $file_type,
                         $thumbpath, $thumbWidth = 200)
{
    list($width, $height) = getimagesize($filepath);
    $thumbHeight = ($height / $width) * $thumbWidth;

    $thumbnail = imagecreatetruecolor($thumbWidth, $thumbHeight);

    switch ($file_type) {
        case 'jpg':
        case 'jpeg':
            $source = imagecreatefromjpeg($filepath);
            break;
        case 'png':
            $source = imagecreatefrompng($filepath);
            break;
        case 'gif':
            $source = imagecreatefromgif($filepath);
            break;
        default:
            echo "Unsupported file type.";
            return;
    }

    imagecopyresampled($thumbnail, $source, 0, 0,
        0, 0, $thumbWidth, $thumbHeight, $width, $height);
    switch ($file_type) {
        case 'jpg':
        case 'jpeg':
            imagejpeg($thumbnail, $thumbpath);
            break;
        case 'png':
            imagepng($thumbnail, $thumbpath);
            break;
        case 'gif':
            imagegif($thumbnail, $thumbpath);
            break;
    }

    imagedestroy($thumbnail);
    imagedestroy($source);
}