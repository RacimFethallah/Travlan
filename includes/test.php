<?php
require_once 'db.inc.php';
require_once 'functions.inc.php';

if (isset($_POST['confirmerd'])) {

    $dated = $_POST["datedp"];
    $dateret = $_POST["dateret"];
    $pays= $_POST["pays"];
    $nbp = $_POST["nbp"];



    Criteres($conn, $dated, $dateret, $nbp , $pays);
} else {
    //header("location: ../index.php?error=searcherror");
    exit();
}
