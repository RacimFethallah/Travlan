<?php

session_start();
require_once 'db.inc.php';
require_once 'functions.inc.php';
if(isset($_POST["addComment"])){


    $hotel = $_POST["hotelName"];
    $comment = $_POST["comment"];
    $idusr = $_SESSION["idUser"];


    


    

    postComment($conn, $idusr,$comment, $hotel);
    $originalPage = $_SERVER['HTTP_REFERER'];
    header("location: $originalPage");


}else if (isset($_POST['commentQuery'])) {
    
    $hotelName = $_POST['commentQuery'];


    displayComments($conn, $hotelName);
}
else{
    header("location: ../index.php");
    exit();
}

