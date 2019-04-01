<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet_web";


$id=$_POST['id'];
$nom=$_POST['nom'];
$desc=$_POST['chemin'];
$prix=$_POST['parent'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 

{

    die("Connection failed: " . $conn->connect_error);

}

 $rqt="update categories set nom='$nom',chemin='$desc',parent='$prix' where id ='$id'";         
        if ($conn->query($rqt) === TRUE) {
	
	
	
	
	echo "Succses";
	
	
	
	}
	
	
	

?>