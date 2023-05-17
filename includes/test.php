<?php
require_once 'db.inc.php';
require_once 'functions.inc.php';

if (isset($_POST['confirmerd'])) {

    $dated = $_POST["datedp"];
    $dateret = $_POST["dateret"];
    $nbp = $_POST["nbp"];


    testt($conn, $dated, $dateret, $nbp);
} else {
    header("location: ../index.php?error=searcherror");
    exit();
}
