<?php
include('db_connect.php');
  

if (isset($_GET['Id_prijava']) && is_numeric($_GET['Id_prijava']))


{

$id = $_GET['Id_prijava'];


$query = "Delete From rjeseni_kvar where id_rjesenik=(Select Id_rjesenik From prijava_kvara where Id_prijava='$id')";
mysqli_query($connection, $query) or die(mysqli_error($connection));

header("Location:../indexadmin.php");
}
else

{
echo "Nemoze se izbrisat korisnik!";
}
?>