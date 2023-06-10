<?php
require_once 'db.inc.php';
require_once 'functions.inc.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);
// if (isset($_POST['saveprofile'])) {
//     // Récupération des données du formulaire soumises par l'utilisateur
//     $nomutilisateur = $_POST["username"];
//     $email = $_POST["email"];
//     $numtel = $_POST["numtel"];
//     $origine = $_POST["origine"];
//     $bio = $_POST["bio"];
//     $rue = $_POST["rue"];
//     $ville = $_POST["ville"];
//     $pays = $_POST["pays"];
//     $codepostal = $_POST["codepostal"];
//     echo $nomutilisateur;
//     // connexion à la base de donnée
//     require_once 'db.inc.php';
//     require_once 'functions.inc.php';
//     // Insérer les valeur de la base de données 
//     $sql = "UPDATE users SET numtel = '$numtel', origine = '$origine', rue = '$rue', ville = '$ville', pays = '$pays', codepostal = '$codepostal', bio = '$bio' WHERE username = '{$_POST["username"]}'";
//     $data = $dbName->prepare($sql);
//     $data->execute();
//     echo "Les données ont été modifiées avec succès !";
// }


if (isset($_POST["saveprofile"])) {


    session_start();

    $username = $_POST["username"];
    $numtel = $_POST["numtel"];
    $origine = $_POST["origine"];
    $bio = $_POST["bio"];
    $rue = $_POST["rue"];
    $ville = $_POST["ville"];
    $pays = $_POST["pays"];
    $codepostal = $_POST["codepostal"];
    // $img = $_FILES["img"];




    

    saveprofile($conn, $numtel, $origine, $rue, $ville, $pays, $codepostal, $bio, $username);
}
mysqli_close($conn);

// if (isset($_FILES['profileImage'])) 
//     $profileImage = $_FILES['profileImage'];
//     $profileImagePath = "data:image/jpeg;base64". $profileImage['profileImage'];


// if (isset($_POST['saveprofile'])) {
//     require_once 'db.inc.php';
//     require_once 'functions.inc.php';
//         session_start();
//     // Step 3: Retrieve input values
//     $username = mysqli_real_escape_string($conn, $_POST['username']);
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
//     $numtel = mysqli_real_escape_string($conn, $_POST['numtel']);
//     $origine = mysqli_real_escape_string($conn, $_POST['origine']);
//     $rue = mysqli_real_escape_string($conn, $_POST['rue']);
//     $ville = mysqli_real_escape_string($conn, $_POST['ville']);
//     $pays = mysqli_real_escape_string($conn, $_POST['pays']);
//     $codepostal = mysqli_real_escape_string($conn, $_POST['codepostal']);
//     $bio = mysqli_real_escape_string($conn, $_POST['bio']);

//     // Step 4: Construct the SQL query
//     $query = "UPDATE users SET  numtel = '$numtel', origine = '$origine', rue = '$rue', ville = '$ville', pays = '$pays', codepostal = '$codepostal', bio = '$bio' WHERE id = {$_SESSION["idUser"]}";


//     // Step 5: Execute the query
//     $result = mysqli_query($conn, $query);


//     header("location: ../monprofile.php");


// }

// mysqli_close($conn);

// if (isset($_FILES["saveprofile"])) {


//     $nomutilisateur = $_POST["username"];
//     $img = $_FILES["img"];




//     require_once 'db.inc.php';
//     require_once 'functions.inc.php';

//     saveprofile2($conn,  $nomutilisateur, $img);
// }
?>