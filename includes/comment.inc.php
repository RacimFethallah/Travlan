<?php

session_start();

if(isset($_POST["addComment"])){


    $hotel = $_POST["hotelName"];
    $comment = $_POST["comment"];
    $idusr = $_SESSION["idUser"];


    require_once 'db.inc.php';
    require_once 'functions.inc.php';


    

    postComment($conn, $idusr,$comment, $hotel);
    $originalPage = $_SERVER['HTTP_REFERER'];
    header("location: $originalPage");


}else if (isset($_POST['searchQuery'])) {
    $hotelName = $_POST['searchQuery'];


    displayComments($conn, $hotelName);
}
else{
    header("location: ../index.php");
    exit();
}

