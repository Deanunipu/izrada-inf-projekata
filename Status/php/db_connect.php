<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Spajanje na bazu neuspijesno !!!" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'db');
if (!$select_db){
    die("Odabir baze neuspijesan !!!" . mysqli_error($connection));
}