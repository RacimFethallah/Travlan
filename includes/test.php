<?php
require_once 'db.inc.php';
require_once 'functions.inc.php';

if (isset($_POST['confirmerd'])) {

    $dated = $_POST["datedp"];
    $dateret = $_POST["dateret"];
    $pays= $_POST["pays"];
    $nbp = $_POST["nbp"];
    if (isset($_POST["croisiere"])) {
        $croisiere = $_POST["croisiere"];
    } else {
    $croisiere= false; } 
 
    if (isset($_POST["Peche"])) {
        $peche=$_POST["Peche"];
    } else {
    $peche= false; } 
 
    if (isset($_POST["Parc_attraction"])) {
        $parc_att=$_POST["Parc_attraction"];
    } else {
        $parc_att=false; } 

    if (isset($_POST["Cinema"])) {
        $cinema=$_POST["Cinema"];
    } else {
    $cinema= false; } 

    if (isset($_POST["Randonnée"])) {
        $Randonnée=$_POST["Randonnée"]; 
    } else {
    $Randonnée= false; } 
    
    if (isset($_POST["Plongée"])) {
        $Plongée=$_POST["Plongée"]; 
    } else {
    $Plongée= false; } 

    if (isset($_POST["touriste"])) {
        $touriste=$POST["touriste"]; 
    } else {
    $touriste= false; } 

    if (isset($_POST["soirées"])) {
        $soirée=$_POST["soirées"];
    } else {
    $soirée= false; } 

    if (isset($_POST["Aquarium"])) {
        $Aquarium=$_POST["Aquarium"]; 
    } else {
    $Aquarium= false; } 

    if (isset($_POST["Ateliers"])) {
        $Ateliers=$_POST["Ateliers"]; 
    } else {
    $Ateliers= false; } 
    
    
    
    
    
    
   
    
    


    Criteres($conn, $dated, $dateret, $nbp , $pays, $croisiere,$peche,$parc_att,$cinema,$Randonnée,$Plongée,$touriste,$soirée,$Aquarium,
$Ateliers);
} else {
    //header("location: ../index.php?error=searcherror");
    exit();
}
