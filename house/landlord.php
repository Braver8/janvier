<?php
// Database connection details
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data using POST method
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Prepare SQL statement to insert data into landlords table
$sql = "INSERT INTO landlords (name, email, phone, address)
        VALUES ('$name', '$email', '$phone', '$address')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New landlord added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
