<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet_web";
$id=$_POST['id'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$rqt="delete  FROM produits  where id ='$id'";
         
        if ($conn->query($rqt) === TRUE) {
	
	
	echo "Sucess";
	
	
	
	}

?>