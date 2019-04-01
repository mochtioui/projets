<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet_web";




$conn = mysqli_connect($servername, $username, $password, $dbname);// Create connection


$res=mysqli_query($conn,"select * from categories ORDER BY id DESC ");
  


echo "<table border=1> <tr> <td> ID </td> <td> nom </td> <td> chemin </td>  <td> parent </td> </tr>";

while ($data=mysqli_fetch_array ($res))
{

echo"<tr><td>".$data['id'] ."</td><td>".$data['nom'] ."</td><td>".$data['chemin'] ."</td><td>".$data['parent'] ."</td> ";
}
echo "</table>"


?>




