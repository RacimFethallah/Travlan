<div class="box register">
      <h1>S'inscrire</h1>
      <form action="includes/register.inc.php" method="post">
         <div class="input-box">
            <span class="logico">
               <ion-icon name="person"></ion-icon>
            </span>
            <input type="text" id="nomuti" name="nomuti" required  oninput="usernameValidity(nomuti)">
            <label>Nom d'utilisateur</label>
         </div>
         <div class="input-box">
            <span class="logico">
               <ion-icon name="mail"></ion-icon>
            </span>
            <input type="email" name="email" maxlength="254" required >
            <label>Email</label>
         </div>
         <div class="input-box">
            <span class="logico">
               <ion-icon name="lock-closed"></ion-icon>
            </span>
            <input type="password" id="pwd" name="pwd" required  oninput="passwordValidity(pwd)">
            <label>Mot de passe</label>
         </div>
         <div class="input-box">
            <span class="logico">
               <ion-icon name="checkmark-done-outline"></ion-icon>
            </span>
            <input type="password" id="pwdconf" name="pwdconf" required oninput="checkPasswordMatch(pwd,pwdconf)" >
            <label>Confirmer Mot de passe</label>
         </div>
         <button type="submit" name="registersubmit" class="btn">S'inscrire</button>
         <div class="login-register">
            <p>Vous avez déjà un compte ?
               <a href="#" class="login-link">Connectez-vous</a>
            </p>
         </div>
      </form>
   </div>
</div>


