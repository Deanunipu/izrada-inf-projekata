<?php
include('db_connect.php');

if (isset($_GET['Id_statusk']))

{

$id = $_GET['Id_statusk'];

$query = "DELETE FROM status_korisnika WHERE Id_statusk='$id'";
mysqli_query($connection, $query) or die(mysqli_error($connection));

header("Location:../indexstat.php");

}
else

{
echo "Nije moguce izvrsiti brisanje";
}
?>