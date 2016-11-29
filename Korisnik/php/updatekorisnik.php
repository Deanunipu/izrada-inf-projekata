  <html>
<head>
<title>Sustav prijave kvara</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../resursi/css/korupin.css" />
</head>
  <body>
 <?php
include('db_connect.php');


if(isset($_GET['Id_korisnika']))
{

$id=$_GET['Id_korisnika'];



$query = "SELECT * from korisnik where Id_korisnika='$id'";
$result = mysqli_query($connection, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
          <h1 class="naslov1">Izmjena </h1>
          <div class="forma1">
      <form  name="form1" method="get" action="up.php">
       <p><input  type="hidden" name="id" value="<?php echo $row['Id_korisnika']; ?>"> </p>
        <p class="#p1">Ime korisnika<input id="in" type="text" name="ime"  value="<?php echo $row['Ime'];  ?>"></p>
        <p class="#p1">Prezime korisnika<input id="in" type="text" name="prezime"  value="<?php echo $row['Prezime'];?>" ></p>
        <p class="#p1">Korisnicko ime<input id="in" type="text" name="korime"   value="<?php echo $row['Korisnicko_ime']?>"></p>
        <p class="#p1">Lozinka<input id="in" type="password" name="pass"   value="<?php echo $row['Password']?>"></p>
       <?php } ?>

     <p class="optionbox">Odjel</p><select id="select" name="odjel">
             <?php
    require('db_connect.php');
    $query1 = "SELECT * FROM odjel order by Id_odjel  ";
       $result1 = mysqli_query($connection, $query1);



while($row1 = mysqli_fetch_array($result1))
{   $idodjel=$row1[0] ;
    $nodjel=$row1[1] ;
?>

   <option value="<?php echo $idodjel; ?>"><?php echo $nodjel; ?></option>

 <?php   }
 ?>
      </select>
     <p class="optionbox2">Status korisnika</p> <select id="select2" name="status">

             <?php
    require('db_connect.php');
    $query2 = "SELECT * FROM status_korisnika order by Id_statusk  ";
       $result2 = mysqli_query($connection, $query2);




while($row2 = mysqli_fetch_array($result2))

{

     $idstatus=$row2[0] ;
     $nstatus=$row2[1] ;

?>

   <option value="<?php echo $idstatus; ?>"><?php echo $nstatus; ?></option>

 <?php   }
 ?>

        </select>
        <br><br>
        <p><input class="button" type="submit" name="submit" value="Potvrdi"></p>
        <p><input  class="button" type=button onClick="parent.location='../indexkorisnik.php'" value="Odustani"><p/>


      </form>
   </div>

 </body>
 </html>

