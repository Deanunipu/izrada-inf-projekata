<?php
include('db_connect.php');

if (isset($_GET['Id_kvar']))

{

$id = $_GET['Id_kvar'];

$query = "DELETE FROM kvar WHERE Id_kvar='$id'";
mysqli_query($connection, $query) or die(mysqli_error($connection));

header("Location: ../indexkvar.php");

}
else

{
echo "Nije moguce izvrsiti brisanje";
}
?>