<?php
include_once 'header.php';
?>



<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="monprofile.css"> 
</head>

    <form method="POST" action="includes/profile.inc.php" enctype="multipart/form-data" >
        <div class="container">
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img id="profile-image" class="profile-image" src="Pics/Background/user.png"
                                            alt="Photo de profil" >
                                        <br>
                                        <input type="file" accept="image/*" onchange="changeProfileImage(event)" name="profileImage">
                                      </div>
                                    <!-- <h5 class="user-name">Nom</h5> -->
                                    <?= $_SESSION["username"] ?? "" ? "<span id='nom'>Hi,<br>{$_SESSION["username"]}</span>" : "" ?>
                                    <br><br>

                                    <!-- <h6 class="user-email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="cdb4b8a6a48d80acb5baa8a1a1e3aea2a0">[email&#160;protected]</a>
                                </h6> -->
                                </div>
                                <div class="about">
                                    <h5 class="mb-2 text-primary">Bio</h5>
                                    <input id="profile_form_biography" name="bio" class="form-control"
                                        placeholder="Biographie" value="<?= $_SESSION["bio"] ?? "" ?>"></input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-primary">PROFILE</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Nom</label>
                                        <input type="text" class="form-control" id="fullName" name="username"
                                            placeholder="Entrer votre nom complet"
                                            value="<?= $_SESSION["username"] ?? "" ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input type="email" class="form-control" id="eMail" name="email"
                                            placeholder="Entrez votre adresse mail"
                                            value="<?= $_SESSION["email"] ?? "" ?>" readonly>
                                    </div>

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                               <div class="form-group">
                                    <label for="numtel">Téléphone</label>
                                      <input type="text" class="form-control" id="idnumtel" name="numtel"
                                        placeholder="Entrez votre numero de téléphone"
                                        value="<?= $_SESSION["numtel"] ?? "" ?>">
                                 </div>
                               </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="origine">Nationnalité</label>
                                        <!-- <input type="url" class="form-control" id="nationnalite" placeholder="Nationnalité"> -->
                                        <input id="idorigine" name="origine" class="form-control"
                                            placeholder="Entrez votre pays d'origine"
                                            value="<?= $_SESSION["origine"] ?? "" ?>">
                                           
                                       </input>
                                    </div>

                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-primary">Addresse</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Street">Rue</label>
                                        <input type="name" class="form-control" id="Street"
                                            placeholder="Entrez votre rue" name="rue"
                                            value="<?= $_SESSION["rue"] ?? "" ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="ciTy">ville</label>
                                        <input type="name" class="form-control" id="ciTy"
                                            placeholder="Entrez votre ville" name="ville"
                                            value="<?= $_SESSION["ville"] ?? "" ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="sTate">Pays</label>
                                        <input id="profile_form_country_id" name="pays" class="form-control"
                                            placeholder="Entrez votre pays" value="<?= $_SESSION["pays"] ?? "" ?>">
                                           
</input>
                                        <!-- <input type="text" class="form-control" id="sTate" placeholder="Entrez votre pays">
</div> -->
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="zIp">Code Postal</label>
                                            <input type="text" class="form-control" id="zIp" name="codepostal"
                                                placeholder="Code Postal" value="<?= $_SESSION["codepostal"] ?? "" ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="text-right">
                                            <!-- <button type="button" id="rein" name="submit"
                                            class="btn btn-secondary">Réinitialiser</button> -->
                                            <button type="submit" id="save" name="saveprofile"
                                                class="btn btn-primary">Enregistrer</button>

                                                <div id="result"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>


    <script>
    function changeProfileImage(event) {
      var input = event.target;
      var reader = new FileReader();
      
      reader.onload = function(){
        var image = document.getElementById('profile-image');
        var image2 = document.getElementById('Anonym');
        image.src = reader.result;
        image2.src = reader.result;
      };
      
      reader.readAsDataURL(input.files[0]);

    }
  </script>
    <script src="monprofile.js" ></script>


<?php
include_once 'login.php';
?>

<?php
include_once 'register.php';
?>

<?php
include_once 'passwordReset.php';
?>

<?php
include_once 'includes/errors.php';
?>


<?php
include_once 'footer.php';
?>