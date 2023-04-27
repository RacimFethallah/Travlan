<div class="login-wrapper">
   <span class="icon-close">
      <ion-icon name="close"></ion-icon>
   </span>

   <div class="box login">
      <h2>Se connecter</h2>
      <form method="post" action="includes/login.inc.php">
         <div class="input-box">
            <span class="logico">
               <ion-icon name="mail"></ion-icon>
            </span>
            <input type="email" name="email" required placeholder="Email">
            <label>Email</label>
         </div>
         <div class="input-box">
            <span class="logico">
               <ion-icon name="lock-closed"></ion-icon>
            </span>
            <input id="userpwd" type="password" name="password" required placeholder="password">
            <label>Mot de passe</label>
         </div>
         <div class="remember-forgot">
            <label><input type="checkbox" id="chkpwd" name="chkpwd">Retenir le mot de passe</label>
            <a href="Travlan.php?id=1021">Mot de passe oublié?</a>
         </div>
         <button type="submit" id="loginBtn" name="loginBtn" class="btn">Se connecter</button>
         <div class="login-register">
            <p>Vous n’avez pas de compte ?
               <a href="#" class="register-link">Inscrivez-vous</a>
            </p>

         </div>
      </form>
   </div>