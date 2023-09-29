<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName ="Travlan";


$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn){
    die("connexion failed: " . mysqli_connect_error());
}