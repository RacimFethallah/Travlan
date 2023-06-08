<?php
include_once 'header.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">



    <title>dark profile settings - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin-top: 200px;
            color: #bcd0f7;
            background: #1A233A;
            /* background-image: url('Pics/Background/cappadocia-tour.jpg'); */
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("Pics/Background/cappadocia-tour.jpg");
            background-repeat: no-repeat;
            opacity: 1;
            background-size: cover;
            height: 77vh;

        }

        /* .container{
            color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
        } */


        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
        }

        .account-settings .user-profile .user-avatar {
            margin: 0 0 1rem 0;

        }

        .account-settings .user-profile .user-avatar img {
            width: 90px;
            height: 90px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
        }

        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
        }

        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 400;

        }

        .account-settings .about {
            margin: 1rem 0 0 0;
            font-size: 0.8rem;
            text-align: center;
            color: white;
        }

        .card {
            /* background: #272E48; */
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
            backdrop-filter: blur(5px);
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid black;
            background-attachment: fixed;
        }

        .form-control .custom-select {
            border: 1px solid #596280;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-size: .825rem;
            background: #1A233A;
            color: #bcd0f7;
        }

        .btn {
            position: absolute;
            /* positioner un elemnt par raport a la balise mere */
            left: 900%;
            top: 90px;
            color: #fff;
            padding: 4px;
            background-color: #b43a10;
            border-color: #b43a10;
            width: 120px;

        }

        .btn:hover {
            background-color: gray;
            border-color: gray;

        }

        .btn-secondary {
            position: absolute;
            /* positioner un elemnt par raport a la balise mere */
            left: 900%;
            top: 90px;
            color: #fff;
            padding: 4px;
            background-color: #b43a10;
            width: 120px;

        }

        .profile-image {
            /* width: 150px;
            height: 150px;
            border-radius: 50%; */
            object-fit: cover;
            width: 90px;
            height: 90px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
        }

        #profile-block #profile-photo img {
            border-radius: 999999px;
            display: block;
            max-width: 100%;

        }

        .flow-browse-image {
            background-color: #505050;
            border-radius: 999999px;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            position: absolute;
            transition: all .5s;
            z-index: 100;
        }

        #bimg {
            overflow: hidden;
        }

        label {
            color: white;
            font-family: Arial, sans-serif;
            font-weight: bold;
            font-size: medium;
        }

        #Email {
            top: 360px;
            background-color: #fff;
        }

        .textarea {
            color: transparent;
        }

        #nom {
            float: right;
            position: relative;
            text-align: center;
            font-size: 16px;
            left: -90px;
            top: -10px;
            font-weight: bold;
            color: #fff;
        }
    </style>
</head>

<body>
    <form action="includes/profile.inc.php" method="post">
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


    <script>
        function changeProfileImage(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function () {
                var image = document.getElementById('profile-image');
                image.src = reader.result;
            };

            reader.readAsDataURL(input.files[0]);
        }

        const mainImage = document.getElementById('profile-image');
        const secondaryImage = document.getElementById('Anonym');

        mainImage.addEventListener("change", function (event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                secondaryImage.src = e.target.result;
            };

            reader.readAsDataURL(file);
        });





    </script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>

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