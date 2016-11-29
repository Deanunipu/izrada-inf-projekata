
<?php
include('db_connect.php');


if (isset($_POST['submit']))
{

$odjel = $_POST['odjel'];


$query = "INSERT INTO odjel(Naziv_odjela)
           VALUES('$odjel')";


$result=mysqli_query($connection, $query) or die(mysqli_error($connection));



 header("Location: ../indexodjel.php");


 }
?>



       <div class="popisk2">
       <h1 id="naslov1">Unos novog odjela </h1>

      <form name="forma2" method="post" action="php/unosodjel.php">
       <p class="#p1">Naziv odjela<input id="in" type="text" name="odjel" placeholder="Naziv odjela"></p>
        <p><input class="button_up" type="submit" name="submit" value="Potvrdi"></p>

      </form>


    </div>



