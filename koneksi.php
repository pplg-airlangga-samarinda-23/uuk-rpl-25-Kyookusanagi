<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "uuk_posyandu";

$koneksi = new mysqli($hostname, $username, $password, $database, 4306);

if  ($koneksi -> connect_error){
    echo "tidak ada koneksi" ;
}
?>
