
<?php
require('db_connect.php');


if (isset($_POST['submit']))
{

$lokacija = $_POST['lokacija'];


$query = "INSERT INTO lokacija (Naziv_lokacija)
           VALUES('$lokacija')";


$result=mysqli_query($connection, $query) or die(mysqli_error($connection));



 header("Location: ../indexlokacija.php");


 }
?>



       <div class="popisk2">
       <h1 id="naslov1">Unos lokacije</h1>

      <form name="forma2" method="post" action="php/unolo.php">
       <p class="#p1">Naziv lokacije<input id="in" type="text" name="lokacija" placeholder="Naziv lokacije"></p>
        <p><input class="button_up" type="submit" name="submit" value="Potvrdi"></p>

      </form>


    </div>



