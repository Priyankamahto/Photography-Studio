<?php
$target_dir = "./videos/";
$target_file = $target_dir . basename($_FILES["videoToUpload"]["name"]);
$videoFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file is a video
if ($videoFileType != "mp4" && $videoFileType != "mkv" && $videoFileType != "avi" && $videoFileType != "mov" && $videoFileType != "flv" && $videoFileType != "wmv") {
    echo "Sorry, only video files are allowed.";
    exit;
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    exit;
}

// Check file size
if ($_FILES["videoToUpload"]["size"]) { // 500 MB limit
    echo "Sorry, your file is too large.";
    exit;
}

// Move the uploaded file
if (move_uploaded_file($_FILES["videoToUpload"]["tmp_name"], $target_file)) {
    echo "The file " . basename($_FILES["videoToUpload"]["name"]) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>