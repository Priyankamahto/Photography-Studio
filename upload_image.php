<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpmyadmin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get image data from the form
$imageTitle = $_POST["imageTitle"];
$imageDescription = $_POST["imageDescription"];
$imageFile = $_FILES["imageFile"];

// Check if image file is uploaded
if (isset($_FILES["imageFile"]["name"]) && $_FILES["imageFile"]["name"] != "") {
    // Get image file details
    $imageName = basename($_FILES["imageFile"]["name"]);
    $imageType = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
    $imageSize = $_FILES["imageFile"]["size"];
    $imageTmpName = $_FILES["imageFile"]["tmp_name"];

    // Allow specific image file formats
    $allowedTypes = array("jpg", "jpeg", "png", "gif");

    // Check if the image file type is allowed
    if (in_array($imageType, $allowedTypes)) {
        // Upload image file to the server
        $targetDir = "img/portfolio/"; // Set upload directory
        $targetFile = $targetDir . $imageName; // Create target file path
        if (move_uploaded_file($imageTmpName, $targetFile)) {
            // Insert image data into the database
            $sql = "INSERT INTO images (title, description, filename, uploaded_at) VALUES ('$imageTitle', '$imageDescription', '$imageName', NOW())";
            if ($conn->query($sql) === TRUE) {
                // Image uploaded and inserted successfully
                echo "Image uploaded and inserted successfully!";
                // Redirect to success page
                header("Location: upload_successim.html");
                exit;
            } else {
                // Error inserting image data
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            // Error uploading image file
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        // Image file type is not allowed
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }
} else {
    // No image file selected
    echo "Please select an image file.";
}

// Close the database connection
$conn->close();
?>