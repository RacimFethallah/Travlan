<?php

require_once 'db.inc.php';
require_once 'functions.inc.php';

if(isset($_POST["submitmail"])){

    $email = $_POST['email'];


    
    mailSend($conn, $email);


}else if(isset($_POST["submitpwd"])){


    $password = $_POST['password'];
    $token = $_POST['token'];

    resetP($conn ,$password, $token);
    
    


}else{
    header("location: ../Travlan.php");
    exit();
}
