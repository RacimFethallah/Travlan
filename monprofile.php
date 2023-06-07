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
            left: 400%;
            top: 90px;
            color: #fff;
            padding: 4px;
            background-color: #b43a10;
            border-color: #b43a10;
            width: 120px;

        }

        .btn:hover{
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
    </style>
</head>

<body>
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Maxwell Admin"> -->
                                    <img id="profile-image" class="profile-image" src="Pics/Background/user.png"
                                        alt="Photo de profil">
                                    <br>
                                    <input id="bimg" type="file" accept="image/*" onchange="changeProfileImage(event)">
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
                                <h6 class="mb-3 text-primary">PROFILE</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Nom</label>
                                    <input type="text" class="form-control" id="fullName"
                                        placeholder="Entrer votre nom complet" value="<?= $_SESSION["username"] ?? "" ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
    <label for="eMail">Email</label>
    <input type="email" class="form-control" id="eMail" placeholder="Entrez votre adresse mail" value="<?= $_SESSION["email"] ?? "" ?>">
</div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone">Téléphone</label>
                                    <input type="text" class="form-control" id="phone"
                                        placeholder="Entrez votre numero de téléphone" value="<?= $_SESSION["numtel"] ?? "" ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="nationnalite">Nationnalité</label>
                                    <!-- <input type="url" class="form-control" id="nationnalite" placeholder="Nationnalité"> -->
                                    <select id="profile_form_country_id" name="profile_form[country_id]" class="form-control" placeholder="Entrez votre pays d'origine" value="<?= $_SESSION["origine"] ?? "" ?>"><option value=""></option><option value="3">Afghanistan</option><option value="248">Afrique du Sud</option><option value="15">Åland</option><option value="6">Albanie</option><option value="62">Algérie</option><option value="57">Allemagne</option><option value="11">Samoa Américaines</option><option value="1">Andorre</option><option value="8">Angola</option><option value="5">Anguilla</option><option value="9">Antarctique</option><option value="4">Antigua-et-Barbuda</option><option value="193">Arabie Saoudite</option><option value="10">Argentine</option><option value="7">Arménie</option><option value="14">Aruba</option><option value="13">Australie</option><option value="12">Autriche</option><option value="16">Azerbaïdjan</option><option value="32">Bahamas</option><option value="23">Bahreïn</option><option value="19">Bangladesh</option><option value="18">Barbade</option><option value="36">Bélarus</option><option value="20">Belgique</option><option value="37">Belize</option><option value="25">Bénin</option><option value="27">Bermudes</option><option value="33">Bhoutan</option><option value="238">Venezuela</option><option value="29">Bolivie</option><option value="30">Bonaire, Saint-Eustache et Saba</option><option value="17">Bosnie-Herzégovine</option><option value="35">Botswana</option><option value="34">Île Bouvet</option><option value="31">Brésil</option><option value="106">Territoire Britannique de l&#039;océan Indien</option><option value="239">Îles Vierges britanniques</option><option value="28">Brunei Darussalam</option><option value="22">Bulgarie</option><option value="21">Burkina Faso</option><option value="24">Burundi</option><option value="117">Cambodge</option><option value="47">Cameroun</option><option value="38">Canada</option><option value="52">Cap-Vert</option><option value="124">Îles Caïmans</option><option value="41">République centrafricaine</option><option value="215">Tchad</option><option value="46">Chili</option><option value="48">Chine</option><option value="54">Île Christmas</option><option value="55">Chypre</option><option value="39">Îles Cocos (Keeling)</option><option value="49">Colombie</option><option value="119">Comores</option><option value="42">Congo</option><option value="45">Îles Cook</option><option value="50">Costa Rica</option><option value="44">Côte d&#039;ivoire</option><option value="98">Croatie</option><option value="51">Cuba</option><option value="53">Curaçao</option><option value="56">République tchèque</option><option value="59">Danemark</option><option value="121">République populaire démocratique de Corée / Corée du Nord</option><option value="58">Djibouti</option><option value="60">Dominique</option><option value="61">Dominicaine république</option><option value="63">Équateur</option><option value="65">Égypte</option><option value="210">El Salvador</option><option value="2">Émirats arabes unis</option><option value="88">Guinée équatoriale</option><option value="67">Érythrée</option><option value="68">Espagne</option><option value="64">Estonie</option><option value="233">États-Unis</option><option value="69">Éthiopie</option><option value="72">îles Malouines</option><option value="74">Îles Féroé</option><option value="73">Micronésie</option><option value="71">Fidji</option><option value="70">Finlande</option><option value="75">France</option><option value="80">Guyane française</option><option value="175">Polynésie française</option><option value="216">Terres Australes françaises</option><option value="76">Gabon</option><option value="85">Gambie</option><option value="79">Géorgie</option><option value="90">Géorgie Du Sud et Les Îles Sandwich du Sud</option><option value="82">Ghana</option><option value="83">Gibraltar</option><option value="89">Grèce</option><option value="84">Groenland</option><option value="78">Grenade</option><option value="87">Guadeloupe</option><option value="92">Guam</option><option value="91">Guatemala</option><option value="81">Guernesey</option><option value="86">Guinée</option><option value="93">Guinée-Bissau</option><option value="94">Guyana</option><option value="99">Haiti</option><option value="96">Îles Heard, Île et McDonald</option><option value="236">Vatican</option><option value="97">Honduras</option><option value="95">Hong-Kong</option><option value="100">Hongrie</option><option value="109">Islande</option><option value="104">Île de Man</option><option value="163">Île Norfolk</option><option value="149">Îles Mariannes du Nord</option><option value="143">Îles Marshall</option><option value="232">Îles Mineures Éloignées des États-Unis</option><option value="181">Îles Pitcairn</option><option value="194">Îles Salomon</option><option value="214">îles Turques-et-Caïques</option><option value="240">Îles Vierges des États-Unis</option><option value="105">Inde</option><option value="101">Indonésie</option><option value="107">Irak</option><option value="108">Iran</option><option value="102">Irlande</option><option value="103">Israël</option><option value="110">Italie</option><option value="112">Jamaïque</option><option value="114">Japon</option><option value="111">Jersey</option><option value="113">Jordanie</option><option value="125">Kazakhstan</option><option value="115">Kenya</option><option value="116">Kirghizistan</option><option value="118">Kiribati</option><option value="245">Kosovo</option><option value="123">Koweït</option><option value="188">La Réunion</option><option value="126">Laos</option><option value="135">Lettonie</option><option value="127">Liban</option><option value="132">Lesotho</option><option value="131">Libéria</option><option value="136">Libye</option><option value="129">Liechtenstein</option><option value="133">Lituanie</option><option value="134">Luxembourg</option><option value="148">Macao</option><option value="144">Macédoine</option><option value="142">Madagascar</option><option value="158">Malaisie</option><option value="156">Malawi</option><option value="155">Maldives</option><option value="145">Mali</option><option value="153">Malte</option><option value="137">Maroc</option><option value="150">Martinique</option><option value="154">Maurice</option><option value="151">Mauritanie</option><option value="247">Mayotte</option><option value="157">Mexique</option><option value="139">Moldavie</option><option value="138">Monaco</option><option value="147">Mongolie</option><option value="140">Monténégro</option><option value="152">Montserrat</option><option value="159">Mozambique</option><option value="146">Myanmar / Birmanie</option><option value="160">Namibie</option><option value="169">Nauru</option><option value="168">Népal</option><option value="166">Pays-Bas</option><option value="161">Nouvelle-Calédonie</option><option value="171">Nouvelle-Zélande</option><option value="165">Nicaragua</option><option value="162">Niger</option><option value="164">Nigéria</option><option value="170">Niue</option><option value="167">Norvège</option><option value="183">Palestine</option><option value="172">Oman</option><option value="231">Ouganda</option><option value="235">Ouzbékistan</option><option value="178">Pakistan</option><option value="185">Palaos</option><option value="173">Panama</option><option value="176">Papouasie-Nouvelle-Guinée</option><option value="186">Paraguay</option><option value="174">Pérou</option><option value="177">Philippines</option><option value="179">Pologne</option><option value="182">Porto Rico</option><option value="184">Portugal</option><option value="187">Qatar</option><option value="122">République de Corée / Corée du Sud</option><option value="40">République démocratique du Congo</option><option value="189">Roumanie</option><option value="77">Royaume-Uni</option><option value="191">Russie</option><option value="192">Rwanda</option><option value="66">Sahara Occidental</option><option value="26">Saint-Barthélemy</option><option value="199">Sainte-Hélène, Ascension et Tristan da Cunha</option><option value="120">Saint-Christophe-et-Niévès</option><option value="128">Sainte-Lucie</option><option value="141">Saint-Martin</option><option value="180">Saint-Pierre-et-Miquelon</option><option value="237">Saint-Vincent-et-les Grenadines</option><option value="204">Saint-Marin</option><option value="211">Saint-Martin</option><option value="244">Samoa</option><option value="209">Sao Tomé-et-Principe</option><option value="205">Sénégal</option><option value="190">Serbie</option><option value="195">Seychelles</option><option value="203">Sierra Leone</option><option value="198">Singapour</option><option value="202">Slovaquie</option><option value="200">Slovénie</option><option value="206">Somalie</option><option value="196">Soudan</option><option value="208">Soudan du Sud</option><option value="130">Sri Lanka</option><option value="197">Suède</option><option value="43">Suisse</option><option value="207">Suriname</option><option value="201">Svalbard et Île Jan Mayen</option><option value="213">Swaziland</option><option value="212">Syrie</option><option value="219">Tadjikistan</option><option value="228">Taïwan</option><option value="229">Tanzanie</option><option value="218">Thaïlande</option><option value="221">Timor-Leste</option><option value="217">Togo</option><option value="220">Tokelau</option><option value="224">Tonga</option><option value="226">Trinité-et-Tobago</option><option value="223">Tunisie</option><option value="225">Turquie</option><option value="222">Turkménistan</option><option value="227">Tuvalu</option><option value="230">Ukraine</option><option value="234">Uruguay</option><option value="242">Vanuatu</option><option value="241">Vietnam</option><option value="243">Wallis et Futuna</option><option value="246">Yémen</option><option value="249">Zambie</option><option value="250">Zimbabwe</option></select >
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
                                    <input type="name" class="form-control" id="Street" placeholder="Entrez votre rue" value="<?= $_SESSION["rue"] ?? "" ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="ciTy">ville</label>
                                    <input type="name" class="form-control" id="ciTy" placeholder="Entrez votre ville" value="<?= $_SESSION["ville"] ?? "" ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="sTate">Pays</label>
                                                                            <select id="profile_form_country_id" name="profile_form[country_id]" class="form-control" placeholder="Entrez votre pays" value="<?= $_SESSION["pays"] ?? "" ?>"><option value=""></option><option value="3">Afghanistan</option><option value="248">Afrique du Sud</option><option value="15">Åland</option><option value="6">Albanie</option><option value="62">Algérie</option><option value="57">Allemagne</option><option value="11">Samoa Américaines</option><option value="1">Andorre</option><option value="8">Angola</option><option value="5">Anguilla</option><option value="9">Antarctique</option><option value="4">Antigua-et-Barbuda</option><option value="193">Arabie Saoudite</option><option value="10">Argentine</option><option value="7">Arménie</option><option value="14">Aruba</option><option value="13">Australie</option><option value="12">Autriche</option><option value="16">Azerbaïdjan</option><option value="32">Bahamas</option><option value="23">Bahreïn</option><option value="19">Bangladesh</option><option value="18">Barbade</option><option value="36">Bélarus</option><option value="20">Belgique</option><option value="37">Belize</option><option value="25">Bénin</option><option value="27">Bermudes</option><option value="33">Bhoutan</option><option value="238">Venezuela</option><option value="29">Bolivie</option><option value="30">Bonaire, Saint-Eustache et Saba</option><option value="17">Bosnie-Herzégovine</option><option value="35">Botswana</option><option value="34">Île Bouvet</option><option value="31">Brésil</option><option value="106">Territoire Britannique de l&#039;océan Indien</option><option value="239">Îles Vierges britanniques</option><option value="28">Brunei Darussalam</option><option value="22">Bulgarie</option><option value="21">Burkina Faso</option><option value="24">Burundi</option><option value="117">Cambodge</option><option value="47">Cameroun</option><option value="38">Canada</option><option value="52">Cap-Vert</option><option value="124">Îles Caïmans</option><option value="41">République centrafricaine</option><option value="215">Tchad</option><option value="46">Chili</option><option value="48">Chine</option><option value="54">Île Christmas</option><option value="55">Chypre</option><option value="39">Îles Cocos (Keeling)</option><option value="49">Colombie</option><option value="119">Comores</option><option value="42">Congo</option><option value="45">Îles Cook</option><option value="50">Costa Rica</option><option value="44">Côte d&#039;ivoire</option><option value="98">Croatie</option><option value="51">Cuba</option><option value="53">Curaçao</option><option value="56">République tchèque</option><option value="59">Danemark</option><option value="121">République populaire démocratique de Corée / Corée du Nord</option><option value="58">Djibouti</option><option value="60">Dominique</option><option value="61">Dominicaine république</option><option value="63">Équateur</option><option value="65">Égypte</option><option value="210">El Salvador</option><option value="2">Émirats arabes unis</option><option value="88">Guinée équatoriale</option><option value="67">Érythrée</option><option value="68">Espagne</option><option value="64">Estonie</option><option value="233">États-Unis</option><option value="69">Éthiopie</option><option value="72">îles Malouines</option><option value="74">Îles Féroé</option><option value="73">Micronésie</option><option value="71">Fidji</option><option value="70">Finlande</option><option value="75">France</option><option value="80">Guyane française</option><option value="175">Polynésie française</option><option value="216">Terres Australes françaises</option><option value="76">Gabon</option><option value="85">Gambie</option><option value="79">Géorgie</option><option value="90">Géorgie Du Sud et Les Îles Sandwich du Sud</option><option value="82">Ghana</option><option value="83">Gibraltar</option><option value="89">Grèce</option><option value="84">Groenland</option><option value="78">Grenade</option><option value="87">Guadeloupe</option><option value="92">Guam</option><option value="91">Guatemala</option><option value="81">Guernesey</option><option value="86">Guinée</option><option value="93">Guinée-Bissau</option><option value="94">Guyana</option><option value="99">Haiti</option><option value="96">Îles Heard, Île et McDonald</option><option value="236">Vatican</option><option value="97">Honduras</option><option value="95">Hong-Kong</option><option value="100">Hongrie</option><option value="109">Islande</option><option value="104">Île de Man</option><option value="163">Île Norfolk</option><option value="149">Îles Mariannes du Nord</option><option value="143">Îles Marshall</option><option value="232">Îles Mineures Éloignées des États-Unis</option><option value="181">Îles Pitcairn</option><option value="194">Îles Salomon</option><option value="214">îles Turques-et-Caïques</option><option value="240">Îles Vierges des États-Unis</option><option value="105">Inde</option><option value="101">Indonésie</option><option value="107">Irak</option><option value="108">Iran</option><option value="102">Irlande</option><option value="103">Israël</option><option value="110">Italie</option><option value="112">Jamaïque</option><option value="114">Japon</option><option value="111">Jersey</option><option value="113">Jordanie</option><option value="125">Kazakhstan</option><option value="115">Kenya</option><option value="116">Kirghizistan</option><option value="118">Kiribati</option><option value="245">Kosovo</option><option value="123">Koweït</option><option value="188">La Réunion</option><option value="126">Laos</option><option value="135">Lettonie</option><option value="127">Liban</option><option value="132">Lesotho</option><option value="131">Libéria</option><option value="136">Libye</option><option value="129">Liechtenstein</option><option value="133">Lituanie</option><option value="134">Luxembourg</option><option value="148">Macao</option><option value="144">Macédoine</option><option value="142">Madagascar</option><option value="158">Malaisie</option><option value="156">Malawi</option><option value="155">Maldives</option><option value="145">Mali</option><option value="153">Malte</option><option value="137">Maroc</option><option value="150">Martinique</option><option value="154">Maurice</option><option value="151">Mauritanie</option><option value="247">Mayotte</option><option value="157">Mexique</option><option value="139">Moldavie</option><option value="138">Monaco</option><option value="147">Mongolie</option><option value="140">Monténégro</option><option value="152">Montserrat</option><option value="159">Mozambique</option><option value="146">Myanmar / Birmanie</option><option value="160">Namibie</option><option value="169">Nauru</option><option value="168">Népal</option><option value="166">Pays-Bas</option><option value="161">Nouvelle-Calédonie</option><option value="171">Nouvelle-Zélande</option><option value="165">Nicaragua</option><option value="162">Niger</option><option value="164">Nigéria</option><option value="170">Niue</option><option value="167">Norvège</option><option value="183">Palestine</option><option value="172">Oman</option><option value="231">Ouganda</option><option value="235">Ouzbékistan</option><option value="178">Pakistan</option><option value="185">Palaos</option><option value="173">Panama</option><option value="176">Papouasie-Nouvelle-Guinée</option><option value="186">Paraguay</option><option value="174">Pérou</option><option value="177">Philippines</option><option value="179">Pologne</option><option value="182">Porto Rico</option><option value="184">Portugal</option><option value="187">Qatar</option><option value="122">République de Corée / Corée du Sud</option><option value="40">République démocratique du Congo</option><option value="189">Roumanie</option><option value="77">Royaume-Uni</option><option value="191">Russie</option><option value="192">Rwanda</option><option value="66">Sahara Occidental</option><option value="26">Saint-Barthélemy</option><option value="199">Sainte-Hélène, Ascension et Tristan da Cunha</option><option value="120">Saint-Christophe-et-Niévès</option><option value="128">Sainte-Lucie</option><option value="141">Saint-Martin</option><option value="180">Saint-Pierre-et-Miquelon</option><option value="237">Saint-Vincent-et-les Grenadines</option><option value="204">Saint-Marin</option><option value="211">Saint-Martin</option><option value="244">Samoa</option><option value="209">Sao Tomé-et-Principe</option><option value="205">Sénégal</option><option value="190">Serbie</option><option value="195">Seychelles</option><option value="203">Sierra Leone</option><option value="198">Singapour</option><option value="202">Slovaquie</option><option value="200">Slovénie</option><option value="206">Somalie</option><option value="196">Soudan</option><option value="208">Soudan du Sud</option><option value="130">Sri Lanka</option><option value="197">Suède</option><option value="43">Suisse</option><option value="207">Suriname</option><option value="201">Svalbard et Île Jan Mayen</option><option value="213">Swaziland</option><option value="212">Syrie</option><option value="219">Tadjikistan</option><option value="228">Taïwan</option><option value="229">Tanzanie</option><option value="218">Thaïlande</option><option value="221">Timor-Leste</option><option value="217">Togo</option><option value="220">Tokelau</option><option value="224">Tonga</option><option value="226">Trinité-et-Tobago</option><option value="223">Tunisie</option><option value="225">Turquie</option><option value="222">Turkménistan</option><option value="227">Tuvalu</option><option value="230">Ukraine</option><option value="234">Uruguay</option><option value="242">Vanuatu</option><option value="241">Vietnam</option><option value="243">Wallis et Futuna</option><option value="246">Yémen</option><option value="249">Zambie</option><option value="250">Zimbabwe</option></select>
                                    <!-- <input type="text" class="form-control" id="sTate" placeholder="Entrez votre pays">
</div> -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="zIp">Code Postal</label>
                                        <input type="text" class="form-control" id="zIp" placeholder="Code Postal" value="<?= $_SESSION["codepostal"] ?? "" ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <button type="button" id="submit" name="submit"
                                            class="btn btn-secondary">Réinitialiser</button>
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