<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file has been uploaded
    if (isset($_FILES["fileToUpload"])) { //is used to check if variable is set or not 
        $fileToUpload = $_FILES["fileToUpload"];
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($fileToUpload["name"], PATHINFO_EXTENSION)); //like extract .jpg and store it in $imageFileType

        // Check if the file is an image
        $check = getimagesize($fileToUpload["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if the file already exists
        if (file_exists("img/" . $fileToUpload["name"])) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Sorry, only JPG, JPEG, PNG files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($fileToUpload["tmp_name"], "img/" . $fileToUpload["name"])) {
                echo "The file has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}
?>