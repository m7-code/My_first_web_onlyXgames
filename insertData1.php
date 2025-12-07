<?php
// Database connection settings
$servername = "localhost"; // Replace with your database host
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "login";    // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists
        echo "<script>alert('Successfully logged in!');</script>";
    } else {
        // User does not exist
        echo "<script>alert('Invalid username or password. Please try again.');</script>";
    }
}

// Close the connection
$conn->close();
?>
