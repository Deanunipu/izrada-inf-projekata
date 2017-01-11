  <html>
<head>
<title>Unos novog korisnika</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../resursi/css/novikvar.css" />
</head>
  <body>




       <h1 class="naslov1">Unos </h1>
       <div class="forma1">
      <form name="forma2" method="get" action="insertprijava.php">

      <p class="optionbox">Br</p><select id="select" name="soba">
             <?php

          require('db_connect.php');
    $query1 = "SELECT Id_smjestaj,Br_sobe ,Naziv_lokacija FROM
     smjestaj,lokacija WHERE smjestaj.Id_lokacija=lokacija.Id_lokacija order by Br_sobe";
       $result1 = mysqli_query($connection, $query1);



while($row1 = mysqli_fetch_array($result1))
{   $idsmjestaj=$row1[0] ;
    $brsobe=$row1[1] ;
    $nlokacija=$row1[2] ;
?>

   <option value="<?php echo $idsmjestaj; ?>"><?php echo $brsobe." ".$nlokacija; ?></option>

 <?php   }
 ?>
      </select>



      <?php
          date_default_timezone_set("Europe/Belgrade");
          $date= date("Y-m-d");
          $time=date("H:i");


?>


          <p id="p1">Datum  :&nbsp&nbsp<input id="in2" type="text" name="datum"
          value="<?php echo $date; ?>" readonly></p>
          <p id="text2">Vrijeme :&nbsp&nbsp<input id="in" type="text" name="vrijeme"
          value="<?php echo $time; ?>" readonly></p>
         <?php session_start();
              $korime=$_SESSION['username'];
            ?>
       <p id="text3">Korisnik :&nbsp&nbsp<input id="in2" type="text" name="korisnik"
          value="<?php echo $korime; ?>" readonly></p>






      <p class="optionbox2">Kvar</p><select id="select2" name="kvar">
             <?php
    require('db_connect.php');
    $query1 = "SELECT * FROM kvar order by Id_kvar  ";
       $result1 = mysqli_query($connection, $query1);



while($row1 = mysqli_fetch_array($result1))
{   $idkvar=$row1[0] ;
    $nkvar=$row1[1] ;
?>

   <option value="<?php echo $idkvar; ?>"><?php echo $nkvar; ?></option>

 <?php   }
 ?>
      </select>




        <p>Opis</p><textarea id="textarea"  name="opis"></textarea>




        <p><input class="button" type="submit" name="submit" value="Potvrdi"></p>
        <p><input  class="button" type=button onClick="parent.location='../indexadmin.php'" value="Odustani"><p/>
      </form>
    </div>

 </body>
 </html>

