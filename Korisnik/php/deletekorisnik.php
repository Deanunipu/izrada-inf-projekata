<?php
include('db_connect.php');

if (isset($_GET['Id_korisnika']) && is_numeric($_GET['Id_korisnika']))


{

$id = $_GET['Id_korisnika'];
echo  $id." ID";

$query = "DELETE FROM korisnik WHERE Id_korisnika='$id'";
mysqli_query($connection, $query) or die(mysqli_error($connection));

header("Location:../indexkorisnik.php");
}
else

{
echo "Nemoze se izbrisat korisnik!";
}
?>