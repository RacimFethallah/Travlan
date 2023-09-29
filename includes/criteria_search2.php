<?php

require_once 'db.inc.php';
require_once 'functions.inc.php';


if (isset($_POST['searchQuery2'])) {


    $searchQuery2 = $_POST['searchQuery2'];
    rsearch($conn, $searchQuery2);
}