<?php

session_start();
require_once 'db.inc.php';
require_once 'functions.inc.php';
if(isset($_POST["saveQuery"])){

    $hotel = $_POST["saveQuery"];
    $idusr = $_SESSION["id"];


    savepost($conn, $hotel, $idusr);

}else if(isset($_POST["deleteQuery"])){

    $hotel = $_POST["deleteQuery"];
    $idusr = $_SESSION["id"];


    deletepost($conn, $hotel, $idusr);


}else if(isset($_POST["checksaveQuery"])){

    $hotel = $_POST["checksaveQuery"];
    $idusr = $_SESSION["id"];


    checkpost($conn, $hotel, $idusr);
}