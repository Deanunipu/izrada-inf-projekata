


<?php
require('db_connect.php');


if (isset($_GET['submit']))
{
$ime= $_GET['korisnik'];
$datum = $_GET['datum'];
$vrijeme = $_GET['vrijeme'];
$soba= $_GET['soba'];
$kvar= $_GET['kvar'];
$opis= $_GET['opis'];

$query1 = "INSERT INTO rjeseni_kvar
    VALUES()";

if (mysqli_query($connection, $query1)) {
    $last_id = mysqli_insert_id($connection);
$query2="SELECT Id_korisnika FROM korisnik WHERE Korisnicko_ime='$ime'";
$result2 = mysqli_query($connection, $query2);

$row2 = mysqli_fetch_array($result2);
$id=$row2[0] ;

$query3 = "INSERT INTO prijava_kvara (Datum_prijava,Sat_prijava,Id_smjestaj,Id_kvar,Id_korisnika,Opis,Id_rjesenik)
    VALUES('$datum','$vrijeme','$soba','$kvar','$id','$opis',
    '$last_id')";


$result3=mysqli_query($connection, $query3) or die(mysqli_error($connection));

   header("Location:../indexadmin.php");

 } } else
 echo "Nije moguce izvrsiti unos";
?>

