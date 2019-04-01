<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siteweb1";
$name1 = $_POST['nom'];
$name2 = $_POST['prenom'];
$email = $_POST['email'];
$Phone = $_POST['phone'];
$message = $_POST['message'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO message (nom,prenom,email,phone,message)
VALUES ('$name1', '$name2', '$email', '$Phone', '$message')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
