

  <div class="popisk">
      <h1>Pregled smjestaja</h1>



  <?php
    require('db_connect.php');
    $query = "SELECT smjestaj.Id_smjestaj, smjestaj.Br_sobe,lokacija.Naziv_lokacija
              FROM smjestaj,lokacija
              WHERE smjestaj.Id_lokacija=lokacija.Id_lokacija";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

   ?>

   <form name="frmUser" method="post" action="">
        <section class="section">
       <div class="container">
        <table>
             <thead>
                  <tr class="header">


                  <th>Broj sobe <div>Broj sobe\App </div></th>
                  <th>Smjestajna jedinica <div>Smjestajna jedinica </div></th>
                  <th>Akcija<div>Akcija</div></th>



             </tr>
             </thead>

           <tbody>


             <?php
                 while($row = mysqli_fetch_array($result)){
                      ?>


             <tr>
                 <td hidden="hidden"><?php echo $row['Id_smjestaj'];?></td>
                 <td><?php echo $row['Br_sobe']; ?></td>
                 <td><?php echo $row['Naziv_lokacija'];?></td>
                 <td><b><a class="button add" href="php/updatesmjestaj.php?Id_smjestaj=<?php echo $row['Id_smjestaj']; ?>">
                 Izmjeni</a></b><b>
    <a class="button add" href="php/deletesm.php?Id_smjestaj=<?php echo $row['Id_smjestaj']; ?>">Ukloni</a></b></td>

             </tr>

        <?php
          }
        ?>
         </tbody>
</table>
</div>
</section>
</form>
     <a class="button add" href="php/unosm.php"> + Unos novog smjestaja

  </a>
</div>