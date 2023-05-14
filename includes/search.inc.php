<?php 

require_once 'db.inc.php';
require_once 'functions.inc.php';
if (isset($_POST['searchTerm'])) {

    $searchTerm = $_POST['searchTerm'];

    

    search($conn, $searchTerm);



}else if(isset($_POST['searchQuery'])){


    $searchQuery = $_POST['searchQuery'];



    fullSearch($conn, $searchQuery);

}
else {
    header("location: ../index.php?error=searcherror");
    exit();
}
