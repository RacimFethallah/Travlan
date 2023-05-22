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
            margin-top: 150px;
            color: #bcd0f7;
            background: #1A233A;
        }

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
        }

        .card {
            background: #272E48;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
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
            left: 400%;
            top: 90px;
            color: #2b0794;
            padding: 4px;
            background-color: #b1e0fe;
            width: 120px;

        }

        .btn-secondary {
            position: absolute;
            /* positioner un elemnt par raport a la balise mere */
            left: 900%;
            top: 90px;
            color: #2b0794;
            padding: 4px;
            background-color: #b1e0fe;
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

        #bimg {
            overflow: hidden ;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Maxwell Admin"> -->
                                    <img id="profile-image" class="profile-image" src="Pics/Background/user.png"
                                        alt="Photo de profil">
                                        <br>
                                    <input  id="bimg" type="file" accept="image/*" onchange="changeProfileImage(event)">
                                </div>
                                <h5 class="user-name">Nom</h5>
                                <h6 class="user-email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="cdb4b8a6a48d80acb5baa8a1a1e3aea2a0">[email&#160;protected]</a>
                                </h6>
                            </div>
                            <div class="about">
                                <h5 class="mb-2 text-primary">Bio</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, obcaecati
                                    perferendis voluptatum ut nisi excepturi sunt sit sint architecto pariatur quae
                                    necessitatibus labore dolor molestias. Est reprehenderit tenetur minima tempore!</p>
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
                                <h6 class="mb-3 text-primary">Profile</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Nom</label>
                                    <input type="text" class="form-control" id="fullName"
                                        placeholder="Entrer votre nom complet">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="eMail">Email</label>
                                    <input type="email" class="form-control" id="eMail"
                                        placeholder="Entrez votre addresse mail">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone">Téléphone</label>
                                    <input type="text" class="form-control" id="phone"
                                        placeholder="Entrez votre numero de téléphone">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">site web URL</label>
                                    <input type="url" class="form-control" id="website" placeholder="site web url">
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
                                    <input type="name" class="form-control" id="Street" placeholder="Entrez votre rue">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="ciTy">ville</label>
                                    <input type="name" class="form-control" id="ciTy" placeholder="Entrez votre ville">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="sTate">Pays</label>
                                    <select class="custom-select">
                                        <option selected>Algérie</option>
                                        <option>USA</option>
                                        <option>Canada</option>
                                        <option>UK</option>
                                        <option>Allemagne</option>
                                        <option>France</option>
                                    </select>
                                    <!-- <input type="text" class="form-control" id="sTate" placeholder="Entrez votre pays">
</div> -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="zIp">Code Postal</label>
                                        <input type="text" class="form-control" id="zIp" placeholder="Code Postal">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <button type="button" id="submit" name="submit"
                                            class="btn btn-secondary">Annuler</button>
                                        <button type="button" id="submit" name="submit"
                                            class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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