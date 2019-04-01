<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet_web";
$id=$_POST['id'];

$nom=$_POST['nom'];
$desc=$_POST['description'];
$prix=$_POST['prix'];
$quant=$_POST['quantite'];
$categorie=$_POST['categorie'];
$image=$_POST['image'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 

{

    die("Connection failed: " . $conn->connect_error);

}

 $rqt="update produits set nom='$nom',description='$desc',prix='$prix',quantite='$quant',categorie='$categorie',image='$image' where id ='$id'";         
        if ($conn->query($rqt) === TRUE) {
	
	
	echo "Sucess";
	
	
	
	}

?>