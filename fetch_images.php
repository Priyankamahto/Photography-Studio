<?php
// Create a directory to store the uploaded files
$uploadDir = 'img/portfolio/';

// Get all the files in the upload directory
$files = scandir($uploadDir);

// Loop through the files and display them
foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
        $filePath = $uploadDir . $file;
        $fileType = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

        if ($fileType == "jpg" || $fileType == "png" || $fileType == "jpeg" || $fileType == "JPG") {
            // Display image
            echo "<img src='$filePath' alt='$file' width='200' height='200' style='margin: 10px; display: inline-block;'>";
        } elseif ($fileType == "mp4" || $fileType == "webm" || $fileType == "ogg") {
            // Display video
            echo "<video width='200' height='200' controls style='margin: 10px; display: inline-block;'>
                    <source src='$filePath' type='video/$fileType'>
                    Your browser does not support the video tag.
                  </video>";
        }
    }
}
?>