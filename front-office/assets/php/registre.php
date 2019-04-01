<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siteweb1";
$name = $_POST['nom'];
$email = $_POST['email'];
$Password = $_POST['password'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registre (nom,email,password)
VALUES ('$name', '$email', '$Password')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
