<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siteweb1";
$email=$_POST['email'];
$Password=$_POST['password'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email FROM registre";
$sql1 = "SELECT password FROM registre";

if ($email == $sql && $Password == $sql1) {
    // output data of each row

        echo "login execiter";

} else {
    echo "0 results";
}
$conn->close();
?>
