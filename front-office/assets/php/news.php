<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siteweb1";
$email = $_POST['EMAIL'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO news ( email)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
