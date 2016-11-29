  <html>
<head>
<title>Sustav prijave kvara</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../resursi/css/smjestajupin.css" />
</head>
  <body>
 <?php
include('db_connect.php');


if(isset($_GET['Id_smjestaj']))
{

$id=$_GET['Id_smjestaj'];



$query = "SELECT * from smjestaj where Id_smjestaj='$id'";
$result = mysqli_query($connection, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
          <h1>Izmjena </h1>
          <div class="forma1">
      <form  name="form1" method="post" action="upsm.php">
       <p><input  type="hidden" name="id" value="<?php echo $row['Id_smjestaj']; ?>"> </p>
        <p>Broj sobe\App<input id="in" type="text" name="brsobe"  value="<?php echo $row['Br_sobe'];  ?>"></p>
       <?php } ?>

     <p class="optionbox">Lokacija</p><select id="select" name="lokacija">
             <?php
    require('db_connect.php');
    $query1 = "SELECT * FROM lokacija order by Id_lokacija  ";
       $result1 = mysqli_query($connection, $query1);



while($row1 = mysqli_fetch_array($result1))
{   $idlokacija=$row1[0] ;
    $nlokacija=$row1[1] ;
?>

   <option value="<?php echo $idlokacija; ?>"><?php echo $nlokacija; ?></option>

 <?php   }
 ?>


       </select>
        <br><br>
        <p><input class="button" type="submit" name="submit" value="Potvrdi"></p>
        <p><input  class="button" type=button onClick="parent.location='../indexsmjestaj.php'" value="Odustani"><p/>


      </form>
   </div>

 </body>
 </html>

