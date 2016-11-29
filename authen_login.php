<?php
session_start();
require("db_connect.php");

if (isset($_POST['myusername']) and isset($_POST['mypassword'])){

// Dodavanje vrijednosti $username i $password
$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];


$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($connection,$myusername);
$mypassword = mysqli_real_escape_string($connection,$mypassword);




// Select naredba
$query = "SELECT * FROM `korisnik` WHERE Korisnicko_ime='$myusername' and Password='$mypassword'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$data= mysqli_fetch_array($result);
$count = mysqli_num_rows($result);


if($count>0){
$_SESSION["myusername"] = $login_user;
if($data["Id_statusk"]=="1"){

header("Location: Korisnik/indexkorisnik.php");
}
if($data["Id_statusk"]=="2"){

header("Location: Korisnik/indexkorisnik.php");
}
}
else{

header("Location: index.html");

}
}

?>