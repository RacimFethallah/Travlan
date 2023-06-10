<?php 

require_once 'db.inc.php';
require_once 'functions.inc.php';


if(isset($_POST['searchQuery1'])){

    $searchQuery1= $_POST['searchQuery1'];
    csearch($conn, $searchQuery1);
} 