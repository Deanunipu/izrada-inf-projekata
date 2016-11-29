

  <div class="popisk">
      <h1>Pregled prava pristupa korisnika</h1>



  <?php
    require('db_connect.php');
    $query = "SELECT * FROM status_korisnika order by Id_statusk  ";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

   ?>

   <form name="frmUser" method="post" action="">
        <section class="section">
       <div class="container">
        <table>
             <thead>
                  <tr class="header">


                  <th>Pravo pristupa <div>Pravo pristupa</div></th>
                  <th>Akcija<div>Akcija</div></th>



             </tr>
             </thead>

           <tbody>


             <?php
                 while($row = mysqli_fetch_array($result)){
                      ?>


             <tr>
                 <td hidden="hidden"><?php echo $row['Id_statusk'];?></td>
                 <td><?php echo $row['Naziv_statusk'];?></td>
                 <td><b>
    <a class="button add" href="php/deletestat.php?Id_statusk=<?php echo $row['Id_statusk']; ?>">Ukloni</a></b></td>

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
