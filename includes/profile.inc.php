<?php


if(isset($_POST["saveprofile"])){


    $nomutilisateur = $_POST["username"];
    $id = $_SESSION["id"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $numtel = $_POST["numtel"];
    $rue = $_POST["rue"];
    $ville = $_POST["ville"];
    $pays = $_POST["pays"];
    $codepostal = $_POST["codepostal"];
    
    


    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    changeprofile($conn, $nomutilisateur,$numtel,$rue,$ville,$pays, $codepostal,$id);
}