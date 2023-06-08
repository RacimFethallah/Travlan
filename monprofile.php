<?php
include_once 'header.php';
?>



<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="monprofile.css"> 
</head>

    <form action="includes/profile.inc.php" enctype="multipart/form-data" method="post">
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
                                        <input id="bimg" type="file" accept="image/*"
                                            onchange="changeProfileImage(event)" name="img" value="<?= $_SESSION["img"] ?? "" ?>">
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
                                    <textarea id="profile_form_biography" name="bio" class="form-control"
                                        placeholder="Biographie" value="<?= $_SESSION["bio"] ?? "" ?>"></textarea>
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
                                        <label for="phone">Téléphone</label>
                                        <input type="text" class="form-control" id="phone" name="numtel"
                                            placeholder="Entrez votre numero de téléphone"
                                            value="<?= $_SESSION["numtel"] ?? "" ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="nationnalite">Nationnalité</label>
                                        <!-- <input type="url" class="form-control" id="nationnalite" placeholder="Nationnalité"> -->
                                        <select id="profile_form_country_id" name="origine" class="form-control"
                                            placeholder="Entrez votre pays d'origine"
                                            value="<?= $_SESSION["origine"] ?? "" ?>">
                                            <option value=""></option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afrique du Sud">Afrique du Sud</option>
                                            <option value="Åland">Åland</option>
                                            <option value="Albanie">Albanie</option>
                                            <option value="Algérie">Algérie</option>
                                            <option value="Allemagne">Allemagne</option>
                                            <option value="Samoa Américaines">Samoa Américaines</option>
                                            <option value="Andorre">Andorre</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctique">Antarctique</option>
                                            <option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
                                            <option value="Arabie Saoudite">Arabie Saoudite</option>
                                            <option value="Argentine">Argentine</option>
                                            <option value="Arménie">Arménie</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australie">Australie</option>
                                            <option value="Autriche">Autriche</option>
                                            <option value="Azerbaïdjan">Azerbaïdjan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahreïn">Bahreïn</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbade">Barbade</option>
                                            <option value="Bélarus">Bélarus</option>
                                            <option value="Belgique">Belgique</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Bénin">Bénin</option>
                                            <option value="Bermudes">Bermudes</option>
                                            <option value="Bhoutan">Bhoutan</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Bolivie">Bolivie</option>
                                            <option value="Bonaire, Saint-Eustache et Saba">Bonaire, Saint-Eustache et
                                                Saba</option>
                                            <option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Île Bouvet">Île Bouvet</option>
                                            <option value="Brésil">Brésil</option>
                                            <option value="Territoire Britannique de l'océan Indien">Territoire
                                                Britannique de l'océan Indien</option>
                                            <option value="Îles Vierges britanniques">Îles Vierges britanniques</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgarie">Bulgarie</option>
                                            <option value="Zambie">Zambie</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
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
                                        <select id="profile_form_country_id" name="pays" class="form-control"
                                            placeholder="Entrez votre pays" value="<?= $_SESSION["pays"] ?? "" ?>">
                                            <option value=""></option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afrique du Sud">Afrique du Sud</option>
                                            <option value="Åland">Åland</option>
                                            <option value="Albanie">Albanie</option>
                                            <option value="Algérie">Algérie</option>
                                            <option value="Allemagne">Allemagne</option>
                                            <option value="Samoa Américaines">Samoa Américaines</option>
                                            <option value="Andorre">Andorre</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctique">Antarctique</option>
                                            <option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
                                            <option value="Arabie Saoudite">Arabie Saoudite</option>
                                            <option value="Argentine">Argentine</option>
                                            <option value="Arménie">Arménie</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australie">Australie</option>
                                            <option value="Autriche">Autriche</option>
                                            <option value="Azerbaïdjan">Azerbaïdjan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahreïn">Bahreïn</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbade">Barbade</option>
                                            <option value="Bélarus">Bélarus</option>
                                            <option value="Belgique">Belgique</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Bénin">Bénin</option>
                                            <option value="Bermudes">Bermudes</option>
                                            <option value="Bhoutan">Bhoutan</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Bolivie">Bolivie</option>
                                            <option value="Bonaire, Saint-Eustache et Saba">Bonaire, Saint-Eustache et
                                                Saba</option>
                                            <option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Île Bouvet">Île Bouvet</option>
                                            <option value="Brésil">Brésil</option>
                                            <option value="Territoire Britannique de l'océan Indien">Territoire
                                                Britannique de l'océan Indien</option>
                                            <option value="Îles Vierges britanniques">Îles Vierges britanniques</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgarie">Bulgarie</option>
                                            <option value="Zambie">Zambie</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>


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