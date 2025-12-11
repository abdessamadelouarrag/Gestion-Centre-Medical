<?php

$host = "localhost";
$user = "root";
$password = "2004";
$dbname = "centremedical";

$connect = mysqli_connect($host, $user, $password, $dbname);

if(!$connect){
    die("CONNECTION FIELD :" . mysqli_connect_error());
}

?>