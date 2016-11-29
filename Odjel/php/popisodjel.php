

  <div class="popisk">
      <h1>Popis odjela</h1>



  <?php
    require('db_connect.php');
    $query = "SELECT * FROM odjel order by Id_odjel  ";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

   ?>

   <form name="frmUser" method="post" action="">
        <section class="section">
       <div class="container">
        <table>
             <thead>
                  <tr class="header">


                  <th>Naziv odjela <div>Naziv odjela</div></th>
                  <th>Akcija<div>Akcija</div></th>



             </tr>
             </thead>

           <tbody>


             <?php
                 while($row = mysqli_fetch_array($result)){
                      ?>


             <tr>
                 <td hidden="hidden"><?php echo $row['Id_odjel'];?></td>
                 <td><?php echo $row['Naziv_odjela'];?></td>
                 <td><b>
    <a class="button add" href="php/deleteodjel.php?Id_odjel=<?php echo $row['Id_odjel']; ?>">Ukloni</a></b></td>

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
