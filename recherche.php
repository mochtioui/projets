<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet_web";

$nom=$_POST['nom'];



$conn = mysqli_connect($servername, $username, $password, $dbname);// Create connection



$res=mysqli_query($conn,"select * from produits where  nom='$nom'");
  


echo "<table border=1> <tr> <td> ID </td> <td> nom </td> <td> description </td> <td> prix </td> <td> quantite </td> </tr>";

while ($data=mysqli_fetch_array ($res))
{

echo"<tr><td>".$data['id'] ."</td><td>".$data['nom'] ."</td><td>".$data['description'] ."</td><td>".$data['prix'] ."</td><td>".$data['quantite'] ."</td> ";
}
echo "</table>"


?>


