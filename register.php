<?php
// Database connection
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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $username = $_POST["u_name"];
  $email = $_POST["email_id"];
  $contact = $_POST["contact_no"];
  $password = $_POST["password"];

  // Validate input (you should add more comprehensive validation)
  if (empty($username) || empty($password) || empty($email) || empty($contact)) {
    echo "All fields are required.";
  } else {
    // Hash the password
   // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
       $password1="$password";
    // Prepare SQL statement
    $sql = "INSERT INTO registration (u_name, password, contact_no, email_id) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssss", $username, $password1, $contact, $email);

    // Execute the statement
    if ($stmt->execute()) {
      echo "Registration successful!";
      header("Location: userlogin.html");
      exit;
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
  }
}

$conn->close();
?>