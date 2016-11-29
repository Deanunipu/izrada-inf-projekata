<?php
include('db_connect.php');

if (isset($_GET['Id_smjestaj']))


{

$id = $_GET['Id_smjestaj'];

$query = "DELETE FROM smjestaj WHERE Id_smjestaj='$id'";
mysqli_query($connection, $query) or die(mysqli_error($connection));

header("Location: ../indexsmjestaj.php");

}
else

{
echo "Nemoguce izbrisati vrijednos smjestaja!";
}
?>