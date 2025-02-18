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

// Get videos from database
$sql = "SELECT * FROM videos";
$result = $conn->query($sql);

// Display videos
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Title: " . $row["title"] . "<br>";
        echo "Description: " . $row["description"] . "<br>";
        echo "File Path: " . $row["file_path"] . "<br>";
        echo "<video width='320' height='240' controls><source src='" . $row["file_path"] . "' type='video/mp4'></video><br><br>";
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>