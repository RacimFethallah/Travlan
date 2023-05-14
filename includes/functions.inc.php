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
        $_SESSION["username"] = $userExists["username"];
        $_SESSION["email"] = $userExists["email"];

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
        echo  json_encode($resultsArray);
    } else {
        echo json_encode(["message" => "Aucun résultat trouvé."]);
    }
}



function fullSearch($conn, $searchQuery)
{

    $searchQuery = mysqli_real_escape_string($conn, $searchQuery);

    if (stripos($searchQuery, 'hotel') !== false || stripos($searchQuery, 'hôtel') !== false) {
        $queryParts = preg_split("/[, ]+/", $searchQuery);
        // Get the first part of the search query
        $firstPart = trim($queryParts[0]);
    
        $query = "SELECT h.nom, h.rating, h.price, h.description, h.urlimg
                  FROM hotels AS h
                  LEFT JOIN destinations AS d ON (h.destination_id = d.id) 
                  WHERE d.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%' 
                  OR h.nom COLLATE utf8mb4_general_ci LIKE '%$firstPart%'";
    
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
     else {

        $query = "SELECT d.nom, NULL AS rating, NULL AS price, NULL AS description,NULL AS urlimg
               FROM destinations d
               WHERE d.nom LIKE '%Paris%'
               UNION
               SELECT h.nom, h.rating, h.price, h.description, h.urlimg
               FROM hotels h
               JOIN destinations d ON d.id = h.destination_id
               WHERE d.nom LIKE '%Paris%';";



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
