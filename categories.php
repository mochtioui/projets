

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
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$req="select * from  categories where id='$id'";
 
if ($conn->query($req) === FALSE) 

{


}


else 

{

$sql = "INSERT INTO categories (id,nom,chemin,parent) VALUES ('$id','$nom','$desc','$prix')";

if ($conn->query($sql) === TRUE) 

{
	
	
echo "Sucess";
	
	
	}
	else 
	{
		
		echo "id deja existe " ;
		
		
		
	}
    

}
$conn->close();


?>
