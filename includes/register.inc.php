<?php


if(isset($_POST["registersubmit"])){



    $nomutilisateur = $_POST["nomuti"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    //$pwdconf = $_POST["pwdconf"];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';


    if (invalidEmail($email) !== false){
        header("location: ../Travlan.php?error=invalidemail");
        exit();
    }
    if (usernameExists($conn, $nomutilisateur, $email) !== false){
        header("location: ../Travlan.php?error=usernametaken");
        exit();
    }
    //if(invalidPassword($pwd , $pwdconf) !== false){
    //    header("location: ../Travlan.php?error=invalidpassword");
    //    exit();
    //}

    createUser($conn, $nomutilisateur,$email, $pwd);


}
else{
    header("location: ../Travlan.php");
    exit();
}

