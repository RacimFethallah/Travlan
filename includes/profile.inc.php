<?php


if (isset($_POST["saveprofile"])) {


    $nomutilisateur = $_POST["username"];
    $id = $_SESSION["id"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $numtel = $_POST["numtel"];
    $origine = $_POST["origine"];
    $bio = $_POST["bio"];
    $rue = $_POST["rue"];
    $ville = $_POST["ville"];
    $pays = $_POST["pays"];
    $codepostal = $_POST["codepostal"];
    $img = $_POST["img"];




    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    saveprofile($conn, $numtel, $origine, $rue, $ville, $pays, $codepostal, $nomutilisateur, $bio, $img);
}