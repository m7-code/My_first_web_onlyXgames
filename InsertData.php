<?php
// Checking if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collecting form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hashing password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Connecting to database
    $conn = new mysqli("localhost", "root", "", "login");

    // Checking connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Preparing SQL query 
    $stmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    // Execute query
    if ($stmt->execute()) {
        echo "<h3> Registration Successful!</h3>";
        echo "<a href='login.html'>Go to Login</a>";
    } else {
        echo "<h3> Error: " . $stmt->error . "</h3>";
    }

    // Close everything
    $stmt->close();
    $conn->close();
}
?>
