<?php
include('db_connect.php');
     session_start();
    $korime=$_SESSION['username'];

if (isset($_GET['Id_prijava']) && is_numeric($_GET['Id_prijava']))
{

$id = $_GET['Id_prijava'];
$idrj;
$idko;
date_default_timezone_set("Europe/Belgrade");
          $date= date("Y-m-d");
          $time=date("H:i");
$query="Select Id_rjesenik, korisnik.Id_korisnika FROM prijava_kvara, korisnik
 Where Id_prijava='$id' AND korisnik.Korisnicko_ime='$korime'";

 $result = mysqli_query($connection, $query);
       while($row=mysqli_fetch_array($result)){
             global $idrj;
             global $idko;
             $idrj=$row[0];
             $idko=$row[1];

    }


$query1 = " UPDATE rjeseni_kvar
          SET  Datum_rjesenja='$date',
          Sat_rjesenja='$time',Id_korisnik='$idko'
           WHERE Id_rjesenik='$idrj'";

$result1=mysqli_query($connection, $query1) or die(mysqli_error($connection));
  header("Location:../indexuser.php");
}
else

{
echo "Nemoze se izvrsiti potvrda!";
}
?>