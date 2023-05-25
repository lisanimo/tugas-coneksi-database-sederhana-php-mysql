<?php 

$hostname   = "localhost";
$dbname     = "products"; 
$username   = "root";
$pass       = "";

$db     = new mysqli($hostname, $username, $pass, $dbname); 

if ($db === $db) {
    echo "coneksi database berhasil";
} else {
    echo "conneksi database gagal";
}
   