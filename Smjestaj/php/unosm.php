  <html>
<head>
<title>Unos novog korisnika</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../resursi/css/smjestajupin.css" />
</head>
  <body>




       <h1 class="naslov1">Unos </h1>
       <div class="forma1">
      <form name="forma2" method="post" action="insertsm.php">
       <p class="#p1">Broj sobe<input id="in" type="text" name="brojsobe" placeholder="Broj sobe"></p>





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

        <p><input class="button" type="submit" name="submit" value="Potvrdi"></p>
        <p><input  class="button" type=button onClick="parent.location='../indexsmjestaj.php'" value="Odustani"><p/>
      </form>
    </div>

 </body>
 </html>

