


<?php
require('db_connect.php');


if (isset($_POST['submit']))
{

$lokacija = $_POST['lokacija'];
$brojsobe = $_POST['brojsobe'];


$query = "INSERT INTO smjestaj (Br_sobe,Id_lokacija)
           VALUES('$brojsobe','$lokacija')";


$result=mysqli_query($connection, $query) or die(mysqli_error($connection));



 header("Location: ../indexsmjestaj.php");


 }
?>

