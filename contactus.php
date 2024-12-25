<?php
// Database connection details
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "movie"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
    // Retrieve form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    // SQL query to insert data into database
    $sql = "INSERT INTO contact( firstname,lastname,email,phone,subject,message)
    VALUES ('$firstname', '$lastname','$email','$phone','$subject','$message')";


    if ($conn->query($sql) === TRUE) {
        header("Location:home.html");
    } else {
        echo "Error: " . $sql . "<br'>" . $conn->error;
    }

// Close connection
$conn->close();
?>