<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "form"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fname = $_GET['firstname'];
$lname = $_GET['lastname'];
$email = $_GET['email'];
$contactno = $_GET['contactnum'];

// echo $fname.$lname.$email.$contactno;

// SQL query to insert form data into a table
$sql = "INSERT INTO formdata (firstname, lastname, email, contactno)
        VALUES ('$fname', '$lname', '$email', '$contactno')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
