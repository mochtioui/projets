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
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into  produit values('$id','$nom','$desc','$prix','$quant','$categorie','$image')";


