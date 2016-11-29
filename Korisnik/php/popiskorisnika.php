

  <div class="popisk">
      <h1>Popis korisnika </h1>



  <?php
    require('db_connect.php');
    $query = "SELECT korisnik.Id_korisnika, korisnik.Ime, korisnik.Prezime,korisnik.Korisnicko_ime,
              korisnik.Password,odjel.Naziv_odjela,
              status_korisnika.Naziv_statusk FROM korisnik,odjel,status_korisnika
              WHERE korisnik.Id_odjel=odjel.Id_odjel AND  korisnik.Id_statusk=status_korisnika.Id_statusk ";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

   ?>

   <form name="frmUser" method="post" action="">
        <section class="section">
       <div class="container">
        <table>
             <thead>
                  <tr class="header">


                  <th>Ime <div>Ime </div></th>
                  <th>Prezime <div>Prezime </div></th>
                  <th>User <div>User </div></th>
                  <th>Password<div>Password </div></th>
                  <th>Odjel<div>Odjel</div></th>
                  <th>Pristup<div>Pristup</div></th>
                  <th>Akcija<div>Akcija</div></th>



             </tr>
             </thead>

           <tbody>


             <?php
                 while($row = mysqli_fetch_array($result)){
                      ?>


             <tr>
                 <td hidden="hidden"><?php echo $row['Id_korisnika'];?></td>
                 <td><?php echo $row['Ime']; ?></td>
                 <td><?php echo $row['Prezime'];?></td>
                 <td><?php echo $row['Korisnicko_ime'];?></td>
                 <td><?php echo $row['Password'];?></td>
                 <td><?php echo $row['Naziv_odjela'];?></td>
                 <td><?php echo $row['Naziv_statusk'];?></td>
                 <td><b><a class="button add" href="php/updatekorisnik.php?Id_korisnika=<?php echo $row['Id_korisnika']; ?>">
                 Izmjeni</a></b><b>
    <a class="button add" href="php/deletekorisnik.php?Id_korisnika=<?php echo $row['Id_korisnika']; ?>">Ukloni</a></b></td>

             </tr>

        <?php
          }
        ?>
         </tbody>
</table>
</div>
</section>
</form>
     <a class="button add" href="php/unoskorisnik.php"> Unos novog korisnika

  </a>
</div>