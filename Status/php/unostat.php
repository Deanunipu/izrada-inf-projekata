
<?php
require('db_connect.php');


if (isset($_POST['submit']))
{

$statusk = $_POST['statusk'];


$query = "INSERT INTO status_korisnika(Naziv_statusk)
           VALUES('$statusk')";


$result=mysqli_query($connection, $query) or die(mysqli_error($connection));



 header("Location:../indexstat.php");


 }
?>



       <div class="popisk2">
       <h1 id="naslov1">Unos </h1>

      <form name="forma2" method="post" action="php/unostat.php">
       <p class="#p1">Pravo pristupa<input id="in" type="text" name="statusk" placeholder="Pravo pristupa"></p>
        <p><input class="button_up" type="submit" name="submit" value="Potvrdi"></p>

      </form>


    </div>



