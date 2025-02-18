<?php
// Database connection details
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

// Upload video to server and store in database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get uploaded video file
    $videoFile = $_FILES["videoFile"]["name"];
    $videoFilePath = "videos/" . $videoFile; // Path to store uploaded videos
    $videoTitle = $_POST["videoTitle"];
    $videoDescription = $_POST["videoDescription"];

    // Move uploaded video file to uploads directory
    if (move_uploaded_file($_FILES["videoFile"]["tmp_name"], $videoFilePath)) {
        // Insert video details into database
        $sql = "INSERT INTO videos (title, description, file_path) VALUES ('$videoTitle', '$videoDescription', '$videoFilePath')";
        if ($conn->query($sql) === TRUE) {
            echo "Video uploaded successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading video file.";
    }
}

// Close database connection
$conn->close();
?>