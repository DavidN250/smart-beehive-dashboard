<?php
ob_start(); //Turns on output buffering 
session_start();

date_default_timezone_set("Africa/Kigali");

try {
    $con = new PDO("mysql:dbname=beehive;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
   // echo "Coonected";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>