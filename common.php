<?php
    $con = mysqli_connect("localhost", "id17270639_root", "MG^7v5J>w(>[YX1E", "id17270639_estore")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
