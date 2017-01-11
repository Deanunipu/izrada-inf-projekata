



  <div class="popisk">
      <h1>Prijave </h1>
       <?php

    require('db_connect.php');
     if(isset($_POST['search']))
     {   $pretrazi=$_POST['search'];


     $query="SELECT pk.Id_prijava, pk.Datum_prijava, pk.Sat_prijava, pk.Id_smjestaj, pk.Id_korisnika,
                  pk.Id_kvar, pk.Opis, pk.Id_rjesenik, k1.Korisnicko_ime AS k1_ime, kvar.Naziv_kvar, smjestaj.Br_sobe,
                  lokacija.Naziv_lokacija, smjestaj.Id_lokacija, rjeseni_kvar.Datum_rjesenja, rjeseni_kvar.Sat_rjesenja,
                  rjeseni_kvar.Id_korisnik, k2.Korisnicko_ime AS korisnicko_ime
                  FROM prijava_kvara pk
                  LEFT OUTER JOIN korisnik k1 ON pk.Id_korisnika=k1.Id_korisnika
                  LEFT OUTER JOIN kvar ON pk.Id_kvar=kvar.Id_kvar
                  LEFT OUTER JOIN smjestaj ON pk.Id_smjestaj=smjestaj.Id_smjestaj
                  LEFT OUTER JOIN lokacija ON smjestaj.Id_lokacija=lokacija.Id_lokacija
                  LEFT OUTER JOIN rjeseni_kvar ON pk.Id_rjesenik=rjeseni_kvar.Id_rjesenik
                  LEFT OUTER JOIN korisnik k2 ON rjeseni_kvar.Id_korisnik=k2.Id_korisnika
                  WHERE smjestaj.Br_sobe LIKE '%".$pretrazi."%' OR kvar.Naziv_kvar LIKE '%" . $pretrazi .  "%'
                  OR pk.Datum_prijava LIKE '%" . $pretrazi .  "%' OR k2.Korisnicko_ime LIKE '%" . $pretrazi .  "%'
                  ";




          $result = mysqli_query($connection, $query) or die(mysqli_error($connection));



     }else{
     $query ="SELECT pk.Id_prijava, pk.Datum_prijava, pk.Sat_prijava, pk.Id_smjestaj, pk.Id_korisnika,
              pk.Id_kvar, pk.Opis, pk.Id_rjesenik, k1.Korisnicko_ime AS k1_ime, kvar.Naziv_kvar, smjestaj.Br_sobe,
              lokacija.Naziv_lokacija, smjestaj.Id_lokacija, rjeseni_kvar.Datum_rjesenja, rjeseni_kvar.Sat_rjesenja,
              rjeseni_kvar.Id_korisnik, k2.Korisnicko_ime AS korisnicko_ime
              FROM prijava_kvara pk
              LEFT OUTER JOIN korisnik k1 ON pk.Id_korisnika=k1.Id_korisnika
              LEFT OUTER JOIN kvar ON pk.Id_kvar=kvar.Id_kvar
              LEFT OUTER JOIN smjestaj ON pk.Id_smjestaj=smjestaj.Id_smjestaj
              LEFT OUTER JOIN lokacija ON smjestaj.Id_lokacija=lokacija.Id_lokacija
              LEFT OUTER JOIN rjeseni_kvar ON pk.Id_rjesenik=rjeseni_kvar.Id_rjesenik
              LEFT OUTER JOIN korisnik k2 ON rjeseni_kvar.Id_korisnik=k2.Id_korisnika
             ";



    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    }

   ?>




    <form action="" method="POST">
        <input type="text" name="search" />
        <input type="submit" value="Pretrazi" />
    </form>
   <form name="frmUser" method="post" action="">
        <section class="section">
       <div class="container">
        <table>
             <thead>
                  <tr class="header">


                  <th><div>Smjestaj</div></th>
                  <th><div></div></th>
                  <th><div style="margin-left: 20px;">Prijavljeno</div></th>
                  <th><div > </div></th>
                  <th><div style="margin-left: -13px;">Prijavio</div></th>
                  <th><div style="margin-left: 20px;">Kvar i opis</div></th>
                  <th><div></div></th>
                  <th><div style="margin-left: 60px;">Rijeseno</div></th>
                  <th><div></div></th>
                  <th><div></div></th>
                  <th><div style="margin-left: 110px;">Akcija</div></th>



             </tr>
             </thead>

           <tbody>

           <?php
                 while($row = mysqli_fetch_array($result)){

                 ?>


                 <tr><td hidden="hidden"><?php echo $row['Id_prijava'];?></td>
                 <td><div width: 30px;>&nbsp;&nbsp;<?php echo $row['Br_sobe'];?>&nbsp;&nbsp;</div></td>
                 <td><div width: 30px;>&nbsp;&nbsp;<?php echo $row['Naziv_lokacija'];?>&nbsp;&nbsp;</div></td>
                 <td><div width: 30px;><?php echo $row['Datum_prijava']; ?></div></td>
                 <td width: 20px;><?php echo $row['Sat_prijava'];?></td>
                 <td><?php echo $row['k1_ime'];?></td>
                 <td><?php echo $row['Naziv_kvar'];?></td>
                 <td><?php echo $row['Opis'];?></td>  
                 <td><?php echo $row['Datum_rjesenja'];?></td>
                 <td><?php echo $row['Sat_rjesenja'];?></td>
                 <td><?php echo $row['korisnicko_ime'];?></td>


         <td><a class="button add" href="php/updateodrzavanje.php?Id_prijava=<?php echo $row['Id_prijava']; ?>">
                 Izmjeni</a>
    <a class="button add" href="php/deleteprijava.php?Id_prijava=<?php echo $row['Id_prijava']; ?>">Ukloni</a></td>
                 <td><a class="button add" href="php/rijeseno.php?Id_prijava=<?php echo $row['Id_prijava']; ?>">
                 Rjeseno</a>
    <a class="button add" href="php/nerjeseno.php?Id_prijava=<?php echo $row['Id_prijava']; ?>">Nerjeseno</a></td>
                     <?php }?>


             </tr>


         </tbody>
</table>
</div>
</section>
</form>

            

     <a class="addbutton" href="php/unospopiskvarova.php"> + Unos

  </a>
</div>