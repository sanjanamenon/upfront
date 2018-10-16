<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$db = mysqli_connect('localhost', 'root', '');
if (!$db){
    die("Database Connection Failed".mysqli_error($db));
}
$select_db = mysqli_select_db($db, 'upfront');
if (!$select_db){
    die("Database Selection Failed".mysqli_error($db));
}
?>
