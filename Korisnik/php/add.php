


<?php
require('db_connect.php');


if (isset($_POST['submit']))
{

$ime = $_POST['imekorisnika'];
$prezime = $_POST['prezimekorisnika'];
$korisnicko_ime = $_POST['korisnickoime'];
$lozinka= $_POST['lozinka'];
$odjel= $_POST['odjel'];
$status= $_POST['status'];

$query = "INSERT INTO korisnik (Ime,Prezime,Korisnicko_ime,Password,Id_statusk,Id_odjel)
           VALUES('$ime','$prezime','$korisnicko_ime','$lozinka','$status','$odjel')";


$result=mysqli_query($connection, $query) or die(mysqli_error($connection));

header("Location:../indexkorisnik.php");

 }
?>

