


<?php
include('db_connect.php');
 if(isset($_POST['id']))
{  $id= $_POST['id'];

if (isset($_POST['submit']))
{

$brsobe = $_POST['brsobe'];
$idlokacija = $_POST['lokacija'];

$query="UPDATE smjestaj
          SET smjestaj.Br_sobe='$brsobe',smjestaj.Id_lokacija='$idlokacija'
          WHERE Id_smjestaj='$id'";

$result=mysqli_query($connection, $query) or die(mysqli_error($connection));




 header("Location: ../indexsmjestaj.php");
 } }
?>


