<?php
include('db_connect.php');

if (isset($_GET['Id_odjel']))

{

$id = $_GET['Id_odjel'];

$query = "DELETE FROM odjel WHERE Id_odjel='$id'";
mysqli_query($connection, $query) or die(mysqli_error($connection));

header("Location: ../indexodjel.php");

}
else

{
echo "Nije moguce izvrsiti brisanje";
}
?>