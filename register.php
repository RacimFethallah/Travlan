<div class="box register">
      <h2>S'inscrire</h2>
      <form action="includes/register.inc.php" method="post">
         <div class="input-box">
            <span class="logico">
               <ion-icon name="person"></ion-icon>
            </span>
            <input type="text" id="nomuti" name="nomuti" required placeholder="nom utilisateur" oninput="usernameValidity(nomuti)">
            <label>Nom d'utilisateur</label>
         </div>
         <div class="input-box">
            <span class="logico">
               <ion-icon name="mail"></ion-icon>
            </span>
            <input type="email" name="email" maxlength="254" required placeholder="email">
            <label>Email</label>
         </div>
         <div class="input-box">
            <span class="logico">
               <ion-icon name="lock-closed"></ion-icon>
            </span>
            <input type="password" id="pwd" name="pwd" required placeholder="password" oninput="passwordValidity(pwd)">
            <label>Mot de passe</label>
         </div>
         <div class="input-box">
            <span class="logico">
               <ion-icon name="checkmark-done-outline"></ion-icon>
            </span>
            <input type="password" id="pwdconf" name="pwdconf" required oninput="checkPasswordMatch(pwd,pwdconf)" placeholder="password">
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


