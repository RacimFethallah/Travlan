<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;





function invalidEmail($email)
{
    $result = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    return $result;
}

function usernameExists($conn, $nomutilisateur, $email)
{
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?; ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmterror");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $nomutilisateur, $email);
    mysqli_stmt_execute($stmt);


    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $nomutilisateur, $email, $pwd)
{
    $sql = "INSERT INTO users(username,email,password) VALUES (?,?,?); ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmterror");
        exit();
    }

    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $nomutilisateur, $email, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=rnone");
    exit();
}


function loginUser($conn, $email, $pwd)
{

    $userExists = usernameExists($conn, $email, $email);

    if ($userExists === false) {
        header("location: ../index.php?error=wronglogin");
        exit();
    }


    $pwdHashed = $userExists["password"];
    $checkpwd = password_verify($pwd, $pwdHashed);
    if ($checkpwd === false) {
        header("location: ../index.php?error=wronglogin");
        exit();
    } else if ($checkpwd === true) {
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION["idUser"] = $userExists["id"];
        $_SESSION["username"] = $userExists["username"];
        $_SESSION["email"] = $userExists["email"];
        $_SESSION["numtel"] = $userExists["numtel"];
        $_SESSION["origine"] = $userExists["origine"];
        $_SESSION["rue"] = $userExists["rue"];
        $_SESSION["ville"] = $userExists["ville"];
        $_SESSION["pays"] = $userExists["pays"];
        $_SESSION["codepostal"] = $userExists["codepostal"];
        $_SESSION["bio"] = $userExists["bio"];
        $_SESSION["urlimg"] = $userExists["urlimg"];



        header("location: ../index.php?error=lnone");
        exit();
    }
}


function mailSend($conn, $email)
{

    require '../phpmailer/src/Exception.php';
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';

    $userExists = usernameExists($conn, $email, $email);

    if ($userExists === false) {
        header("location: ../index.php?error=invalidemail");
        exit();
    }

    $mail = $userExists['email'];
    $token = bin2hex(random_bytes(32));
    $time_limit = 1800;
    $expiration_time = time() + $time_limit;


    $sql = "UPDATE users SET token = ? , timelimit = ?  WHERE email = ?";

    //mysqli_query($conn, $sql);


    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmterror");
        exit();
    }



    mysqli_stmt_bind_param($stmt, "sis", $token, $expiration_time, $mail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);



    $url = "http://localhost/Travlan/index.php?token=$token";
    $subject = "Password reset request";
    $message = "Please click on the following link to reset your password: $url";

    $mailmsg = new PHPMailer(true);
    $mailmsg->isSMTP();
    $mailmsg->Host = 'smtp.gmail.com';
    $mailmsg->SMTPAuth = true;
    $mailmsg->Username = 'travlan.webmaster@gmail.com';
    $mailmsg->Password = 'ykcndrhygmbjyaol';
    $mailmsg->SMTPSecure = 'ssl';
    $mailmsg->Port = 465;
    $mailmsg->setFrom('travlan.webmaster@gmail.com');

    $mailmsg->addAddress($mail);
    $mailmsg->Subject = $subject;
    $mailmsg->Body = $message;

    try {
        $mailmsg->send();
        header("location: ../index.php?error=emailsent");
        exit();
    } catch (Exception $e) {
        header("location: ../index.php?error=emailpwdresetnotsent");
        exit();
    }
}


function resetP($conn, $password, $token)
{


    $sql = "UPDATE users SET password = ? WHERE token = ?";
    $sql2 = "UPDATE users SET token = NULL, timelimit = NULL WHERE token = ?";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmterror");
        exit();
    }

    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ss", $hashedpwd, $token);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);


    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql2)) {
        header("location: ../index.php?error=stmterror");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $token);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);


    header("location: ../index.php?error=pnone");
    exit();
}




function resetmailpage()
{

    echo "<div class='login-wrapper hidden'>
    <span class='icon-close' id='closereset'>
       <ion-icon name='close'></ion-icon>
    </span>
 
    <div class='box login'>
       <h2>Réinitialiser votre mot de passe</h2>
       <form method='post' action='includes/passwordReset.inc.php'>
          <div class='input-box'>
             <span class='logico'>
                <ion-icon name='mail'></ion-icon>
             </span>
             <input type='email' name='email' required  " . ($_SESSION["email"] ?? "" ? "value='{$_SESSION['email']}'" : "") . ">
             <label>Veuillez saisir votre adresse Email</label>
          </div>
          <button type='submit' name='submitmail' class='btn'>Confirmer</button>
       </form>
    </div>
 </div>";
    echo "<script>
 document.getElementById('closereset').addEventListener('click', function() {
   window.location.href = 'index.php';
 });
</script>";
}





function search($conn, $searchTerm)
{

    $searchTerm = mysqli_real_escape_string($conn, $searchTerm);


    $sql = "SELECT 
            CASE
                WHEN type = 'ville' THEN CONCAT(nom, ', ', (SELECT nom FROM destinations WHERE id = d.parentID))
                ELSE nom
            END AS resultat
        FROM destinations AS d
        WHERE nom LIKE '%$searchTerm%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $resultsArray = array();
        while ($row = $result->fetch_assoc()) {
            $resultsArray[] = $row['resultat'];
        }
        // Encode the results as JSON and echo the response
        echo json_encode($resultsArray);
    } else {
        echo json_encode(["message" => "Aucun résultat trouvé."]);
    }
}



function fullSearch($conn, $searchQuery, $sortby)
{

    $searchQuery = mysqli_real_escape_string($conn, $searchQuery);
    $searchQuery = strtolower($searchQuery);

    if (strpos($searchQuery, 'hotel') !== false || strpos($searchQuery, 'hôtel') !== false) {
        $queryParts = preg_split("/[, ]+/", $searchQuery);
        // Get the first part of the search query
        $firstPart = trim($queryParts[0]);
        $pluralForm = rtrim($firstPart, "s");

        switch ($sortby) {
            case 'Nom A-Z':
                $query = "SELECT h.nom, h.rating, h.price, h.description, h.urlimg, h.url
                    FROM hotels AS h
                    LEFT JOIN destinations AS d ON (h.destination_id = d.id) 
                    LEFT JOIN destinations AS d2 ON (d2.id = d.parentID) 
                    WHERE d.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR d2.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR h.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR h.nom COLLATE utf8mb4_general_ci LIKE '%$pluralForm%'
                    ORDER BY h.nom ASC";
                break;
            case 'Nom Z-A':
                $query = "SELECT h.nom, h.rating, h.price, h.description, h.urlimg, h.url
                    FROM hotels AS h
                    LEFT JOIN destinations AS d ON (h.destination_id = d.id) 
                    LEFT JOIN destinations AS d2 ON (d2.id = d.parentID) 
                    WHERE d.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR d2.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR h.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR h.nom COLLATE utf8mb4_general_ci LIKE '%$pluralForm%'
                    ORDER BY h.nom DESC";
                break;
            case 'Prix asc':
                $query = "SELECT h.nom, h.rating, h.price, h.description, h.urlimg, h.url
                    FROM hotels AS h
                    LEFT JOIN destinations AS d ON (h.destination_id = d.id) 
                    LEFT JOIN destinations AS d2 ON (d2.id = d.parentID) 
                    WHERE d.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR d2.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR h.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR h.nom COLLATE utf8mb4_general_ci LIKE '%$pluralForm%'
                    ORDER BY h.price ASC";
                break;
            case 'Prix desc':
                $query = "SELECT h.nom, h.rating, h.price, h.description, h.urlimg, h.url
                    FROM hotels AS h
                    LEFT JOIN destinations AS d ON (h.destination_id = d.id) 
                    LEFT JOIN destinations AS d2 ON (d2.id = d.parentID) 
                    WHERE d.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR d2.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR h.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR h.nom COLLATE utf8mb4_general_ci LIKE '%$pluralForm%'
                    ORDER BY h.price DESC";
                break;
            case 'Note':
                $query = "SELECT h.nom, h.rating, h.price, h.description, h.urlimg, h.url
                    FROM hotels AS h
                    LEFT JOIN destinations AS d ON (h.destination_id = d.id) 
                    LEFT JOIN destinations AS d2 ON (d2.id = d.parentID) 
                    WHERE d.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR d2.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR h.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR h.nom COLLATE utf8mb4_general_ci LIKE '%$pluralForm%'
                    ORDER BY h.rating DESC";
                break;
            default:
                $query = "SELECT h.nom, h.rating, h.price, h.description, h.urlimg, h.url
                    FROM hotels AS h
                    LEFT JOIN destinations AS d ON (h.destination_id = d.id) 
                    LEFT JOIN destinations AS d2 ON (d2.id = d.parentID) 
                    WHERE d.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR d2.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR h.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
                    OR h.nom COLLATE utf8mb4_general_ci LIKE '%$pluralForm%'
                    ORDER BY h.nom";
                break;
        }


        $result = mysqli_query($conn, $query);
        $numResults = mysqli_num_rows($result);

        if ($result->num_rows > 0) {
            $searchResults = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $searchResults[] = $row;
            }
            header('Content-Type: application/json');
            echo json_encode([
                'numResults' => $numResults,
                'searchResults' => $searchResults
            ]);
        } else {
            echo json_encode([
                'numResults' => $numResults,
                'message' => 'Aucun résultat trouvé.'
            ]);
        }
    } else if (strpos($searchQuery, 'restaurants') !== false || strpos($searchQuery, 'restaurant') !== false) {
        $queryParts = preg_split("/[, ]+/", $searchQuery);
        // Get the first part of the search query
        $firstPart = trim($queryParts[0]);
        $pluralForm = rtrim($firstPart, "s");

        $query = "SELECT r.nom_R, r.etoiles
          FROM restaurants AS r
          LEFT JOIN destinations AS d ON (r.destination_id = d.id) 
          LEFT JOIN destinations AS d2 ON (d2.id = d.parentID) 
          WHERE d.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
          OR d2.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
          OR r.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'
          OR r.nom COLLATE utf8mb4_general_ci LIKE '%$pluralForm%'
          ORDER BY r.nom";



        $result = mysqli_query($conn, $query);


        if ($result->num_rows > 0) {
            $searchResults = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $searchResults[] = $row;
            }

            header('Content-Type: application/json');
            echo json_encode($searchResults);
        } else {
            echo json_encode(["message" => "Aucun résultat trouvé."]);
        }
    } else {

        $query = "SELECT d.nom, NULL AS rating, NULL AS price, NULL AS description,NULL AS urlimg
               FROM destinations d
               WHERE d.nom LIKE '%$searchQuery%'
               UNION
               SELECT h.nom, h.rating, h.price, h.description, h.urlimg
               FROM hotels h
               JOIN destinations d ON d.id = h.destination_id
               WHERE d.nom LIKE '%$searchQuery%';";



        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {
            $searchResults = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $searchResults[] = $row;
            }
            header('Content-Type: application/json');
            echo json_encode($searchResults);
        } else {
            echo json_encode(["message" => "Aucun résultat trouvé."]);
        }
    }
}

function   Criteres(
    $conn,
    $dated,
    $dateret,
    $nbp,
    $pays,
    $croisiere,
    $peche,
    $parc_att,
    $cinema,
    $Randonnée,
    $Plongée,
    $touriste,
    $soirée,
    $Aquarium,
    $Ateliers
) {
    $query = "INSERT INTO reserver_a (numero,id_A) 
    SELECT id,numero
        FROM destinations,activites
        WHERE destinations.type = 'pays' AND nom = '$pays' and activites.id_A=destinations.id; ";
    mysqli_query($conn, $query);
    header("location: ../travlan_conf.php");
    exit();
}



function saveprofile($conn, $numtel, $origine, $rue, $ville, $pays, $codepostal, $nomutilisateur, $bio)
{
    $sql = "UPDATE users SET  numtel = ?, origine = ?, rue = ?, ville = ?, pays = ?, codepostal = ?, bio = ?  WHERE username = ?";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmterror");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "ssssssss", $numtel, $origine, $rue, $ville, $pays, $codepostal, $nomutilisateur, $bio);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../monprofile.php");
    exit();
}
function saveprofile2($conn, $nomutilisateur, $img)
{
    $sql = "UPDATE users SET  urlimg= ?  WHERE username = ?";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmterror");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "ss", $nomutilisateur, $img);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../monprofile.php");
    exit();
}




function postComment($conn, $idusr, $comment, $hotel, $restaurant)
{
    $url = $_SERVER['REQUEST_URI'];
    $decodedQueryString = urldecode($url);



    if (strpos($decodedQueryString, "hôtels") !== false) {


        $findhotel = "SELECT id FROM hotels WHERE nom = '$hotel'";
        $result = mysqli_query($conn, $findhotel);
        $row = mysqli_fetch_assoc($result);
        $idhotel = $row['id'];
        $sql = "INSERT INTO avis(texte, Date_a, idusr, idhotel) VALUES(\"$comment\", NOW(), $idusr, $idhotel)";
        mysqli_query($conn, $sql);
    } else if (strpos($decodedQueryString, "restaurants") !== false) {
        $findresto = "SELECT idR FROM restaurants WHERE nom_R = '$restaurant'";
        $result = mysqli_query($conn, $findresto);
        $row = mysqli_fetch_assoc($result);
        $idresto = $row['id'];
        $sql = "INSERT INTO avis(texte, Date_a, idusr, idhotel) VALUES(\"$comment\", NOW(), $idusr, $idresto)";
        mysqli_query($conn, $sql);
    }
}




function displayComments($conn, $hotelName)
{




    $sql = "SELECT a.texte, u.username
         FROM avis AS a
         LEFT JOIN hotels AS h ON h.id = a.idhotel
         LEFT JOIN users as u ON a.idusr = u.id
         WHERE h.nom = '$hotelName'";
    $result = mysqli_query($conn, $sql);


    if ($result->num_rows > 0) {
        $commentResult = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $commentResult[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($commentResult);
    }
}
