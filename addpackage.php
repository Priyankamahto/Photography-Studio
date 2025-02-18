<?php
// addpackage.php

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpmyadmin";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$package_name = $_POST['package_name'];
$duration = $_POST['duration'];
$location = $_POST['location'];
$costume = $_POST['costume'];
$edited_photos = $_POST['edited_photos'];
$photobook_photos = $_POST['photobook_photos'];
$cinematic_movie_length = $_POST['cinematic_movie_length'];
$photo_frame_quality = $_POST['photo_frame_quality'];
$transport_provided = $_POST['transport_provided'];
$price = $_POST['price'];

// Insert data into database
$sql = "INSERT INTO packages (package_name, duration, location, costume, edited_photos, photobook_photos, cinematic_movie_length, photo_frame_quality, transport_provided, price)
VALUES ('$package_name', '$duration', '$location', '$costume', '$edited_photos', '$photobook_photos', '$cinematic_movie_length', '$photo_frame_quality', '$transport_provided', '$price')";

if ($conn->query($sql) === TRUE) {
  echo "New package added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>