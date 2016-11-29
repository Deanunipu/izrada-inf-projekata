

  <div class="popisk">
      <h1>Pregled Lokacije</h1>



  <?php
    require('db_connect.php');
    $query = "SELECT * FROM lokacija order by Id_lokacija  ";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

   ?>

   <form name="frmUser" method="post" action="">
        <section class="section">
       <div class="container">
        <table>
             <thead>
                  <tr class="header">


                  <th>Lokacija <div>Naziv lokacije</div></th>
                  <th>Akcija<div>Akcija</div></th>



             </tr>
             </thead>

           <tbody>


             <?php
                 while($row = mysqli_fetch_array($result)){
                      ?>


             <tr>
                 <td hidden="hidden"><?php echo $row['Id_lokacija'];?></td>
                 <td><?php echo $row['Naziv_lokacija'];?></td>
                 <td><b>
    <a class="button add" href="php/deletelo.php?Id_lokacija=<?php echo $row['Id_lokacija']; ?>">Ukloni</a></b></td>

             </tr>

        <?php
          }
        ?>
         </tbody>
</table>
</div>

</section>
</form>
</div>
