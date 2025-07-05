<?php
$connec = mysqli_connect("localhost", "root", "", "cab-booking");

if(!$connec){
    die("connection error:" . mysqli_connect_error());
}
?>