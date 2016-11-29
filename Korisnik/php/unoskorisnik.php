  <html>
<head>
<title>Unos novog korisnika</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../resursi/css/korupin.css" />
</head>
  <body>




       <h1 class="naslov1">Unos </h1>
       <div class="forma1">
      <form name="forma2" method="post" action="add.php">
       <p class="#p1">Ime korisnika<input id="in" type="text" name="imekorisnika" id="imekorisnika"  placeholder="Ime korisnika"></p>
       <p class="#p1">Prezime korisnika<input id="in" type="text" name="prezimekorisnika" id="prezimekorisnika"  placeholder="Prezime korisnika"></p>
       <p class="#p1">Korisnicko ime<input id="in" type="text" name="korisnickoime" id="korisnickoime"  placeholder="Korisnicko ime"></p>
        <p class="#p1">Lozinka<input id="in" type="password" name="lozinka" id="lozinka"  placeholder="Lozinka"></p>





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
        <p><input class="button" type="submit" name="submit" value="Potvrdi"></p>
        <p><input  class="button" type=button onClick="parent.location='../indexkorisnik.php'" value="Odustani"><p/>
      </form>
    </div>

 </body>
 </html>

