
<?php


require_once 'includes/functions.inc.php';



if (isset($_GET["token"])) {

   
   require_once 'includes/db.inc.php';
   
   $token = $_GET["token"];
   $sql = "SELECT * FROM users WHERE token='$token'";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
   if(time() > $row['timelimit']){
      echo "<script> alert('Token is invalid or has expired'); </script>";
   }else{
      if (mysqli_num_rows($result) == 1) {

         echo "<div class='login-wrapper hidden'>
           <span class='icon-close' id='closereset'>
              <ion-icon name='close'></ion-icon>
           </span>
        
           <div class='box login'>
              <h2>Réinitialiser votre mot de passe</h2>
              <form method='post' action='includes/passwordReset.inc.php'>
                 <div class='input-box'>
                    <span class='logico'>
                       <ion-icon name='lock-closed'></ion-icon>
                    </span>
                    <input type='password' name='password' minlength='8' required placeholder='password'>
                    <label>Veuillez saisir votre nouveau mot de passe</label>
                 </div>
                 <button type='submit' name='submitpwd' class='btn'>Réinitialiser</button>
                 <input type='hidden' name='token' value='$token'>
              </form>
           </div>
        </div>";
         echo "<script>
            document.getElementById('closereset').addEventListener('click', function() {
            window.location.href = 'Travlan.php';
            });
   </script>";
      } else {
         echo "<script> alert('Token is invalid or has expired'); </script>";
      }
   }
   
} else if (isset($_GET["id"]) == "1021") {
   resetmailpage();
}
?>

