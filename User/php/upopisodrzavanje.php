
<?php
include('db_connect.php');

 if(isset($_GET['id']))
{  $id= $_GET['id'];

if (isset($_GET['submit']))
{

 $ime= $_GET['korisnik'];
 $datum = $_GET['datum'];
 $vrijeme = $_GET['vrijeme'];
 $soba= $_GET['soba'];
 $kvar= $_GET['kvar'];
 $opis= $_GET['opis'];


  $query="SELECT Id_korisnika FROM korisnik WHERE Korisnicko_ime='$ime'";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_array($result);
  $id_korisnik=$row[0];


 $query1="UPDATE prijava_kvara
          SET prijava_kvara.Id_korisnika='$id_korisnik', Datum_prijava='$datum',
          Sat_prijava='$vrijeme',
          id_smjestaj='$soba',Id_kvar='$kvar',
          Opis='$opis'
           WHERE Id_prijava='$id'";

$result1=mysqli_query($connection, $query1) or die(mysqli_error($connection));


header("Location:../indexuser.php");
 } }
  else
 echo "Nije moguce izvrsiti izmjenu";
?>