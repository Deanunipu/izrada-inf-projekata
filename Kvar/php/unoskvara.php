
<?php
require('db_connect.php');


if (isset($_POST['submit']))
{

$kvar = $_POST['kvar'];


$query = "INSERT INTO kvar(Naziv_kvar)
           VALUES('$kvar')";


$result=mysqli_query($connection, $query) or die(mysqli_error($connection));



 header("Location: ../indexkvar.php");


 }
?>



       <div class="popisk2">
       <h1 id="naslov1">Unos novog naziva kvara </h1>

      <form name="forma2" method="post" action="php/unoskvara.php">
       <p class="#p1">Naziv kvara<input id="in" type="text" name="kvar" placeholder="Naziv kvara"></p>
        <p><input class="button_up" type="submit" name="submit" value="Potvrdi"></p>

      </form>


    </div>



