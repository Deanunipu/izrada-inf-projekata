<?php
include('db_connect.php');

if (isset($_GET['Id_lokacija']))

{

$id = $_GET['Id_lokacija'];

$query = "DELETE FROM lokacija WHERE Id_lokacija='$id'";
mysqli_query($connection, $query) or die(mysqli_error($connection));

header("Location: ../indexlokacija.php");

}
else

{
echo "Nije moguce izvrsiti brisanje";
}
?>