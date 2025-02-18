<?php

// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "phpmyadmin"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Process data from the HTML form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$package_name = $_POST["package_name"];
	$duration = $_POST["duration"];
	$locations = $_POST["locations"];
	$costumes = $_POST["costumes"];
	$edited_photos = $_POST["edited_photos"];
	$photobook_photos = $_POST["photobook_photos"];
	$cinematic_movie_length = $_POST["cinematic_movie_length"];
	$photo_frame_quality = $_POST["photo_frame_quality"];
	$transport_provided = $_POST["transport_provided"];
	$price = $_POST["price"];

	// Prepare and execute the SQL INSERT query
	$sql = "INSERT INTO packages (package_name, duration, locations, costumes, edited_photos, photobook_photos, cinematic_movie_length, photo_frame_quality, transport_provided, price) 
          VALUES ('$package_name', '$duration', '$locations', '$costumes', '$edited_photos', '$photobook_photos', '$cinematic_movie_length', '$photo_frame_quality', '$transport_provided', '$price')";

	if ($conn->query($sql) === TRUE) {
		echo "New package created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();

?>