<?php 

if (isset($_POST['searchTerm'])) {

    $searchTerm = $_POST['searchTerm'];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';


    
    search($conn, $searchTerm);



} else {
    header("location: ../index.php?error=searcherror");
    exit();
}
