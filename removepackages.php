<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "phpmyadmin"; // Replace with your database name

// Connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the package name from the form data
if (isset($_POST['pname'])) {
    $package_name = $_POST['pname'];
    $sql = "DELETE FROM packages WHERE package_name = '$package_name'";
    if (mysqli_query($conn, $sql)) {
        echo "Package removed successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>