


<?php
include('db_connect.php');
 if(isset($_GET['id']))
{  $id= $_GET['id'];

if (isset($_GET['submit']))
{

$ime = $_GET['ime'];
$prezime = $_GET['prezime'];
$korime = $_GET['korime'];
$pass= $_GET['pass'];
$idodjel= $_GET['odjel'];
$idstatus= $_GET['status'];

$query="UPDATE korisnik
          SET korisnik.Ime='$ime', korisnik.Prezime='$prezime',
           korisnik.Korisnicko_ime='$korime',
           korisnik.Password='$pass',korisnik.Id_odjel='$idodjel',
              korisnik.Id_statusk='$idstatus'
              WHERE Id_korisnika='$id'";

$result=mysqli_query($connection, $query) or die(mysqli_error($connection));


header("Location:../indexkorisnik.php");
 } }
?>


