<?php

if(isset($_POST["loginBtn"])){


    $email = $_POST['email'];
    $pwd = $_POST['password'];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';


    loginUser($conn, $email, $pwd);

}else{
    header("location: ../Travlan.php");
    exit();
}