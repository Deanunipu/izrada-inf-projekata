

  <div class="popisk">
      <h1>Popis naziva kvara</h1>



  <?php
    require('db_connect.php');
    $query = "SELECT * FROM kvar order by Id_kvar  ";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

   ?>

   <form name="frmUser" method="post" action="">
        <section class="section">
       <div class="container">
        <table>
             <thead>
                  <tr class="header">


                  <th>Naziv kvara <div>Naziv kvara</div></th>
                  <th>Akcija<div>Akcija</div></th>



             </tr>
             </thead>

           <tbody>


             <?php
                 while($row = mysqli_fetch_array($result)){
                      ?>


             <tr>
                 <td hidden="hidden"><?php echo $row['Id_kvar'];?></td>
                 <td><?php echo $row['Naziv_kvar'];?></td>
                 <td><b>
    <a class="button add" href="php/deletekvara.php?Id_kvar=<?php echo $row['Id_kvar']; ?>">Ukloni</a></b></td>

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
