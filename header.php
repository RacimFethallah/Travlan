<?php
session_start();
if (isset($_SESSION["username"])) {
    echo "<script>sessionStorage.setItem('logged_in', 'true');</script>";
} else {
    echo "<script>sessionStorage.clear();</script>";
}
?>


<html>



<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>
        Travlan
    </title>
    <link rel="stylesheet" href="Travlan.css">
    <link rel="stylesheet" href="search.css">
    <link rel="icon" href="Pics/UI/location.svg">



</head>

<body>
    <header id="my-header">
        <a href="index.php" id='Logo'></a>
        
            <form action="search.php" method="POST" id="searchFormS">
                <input type='text' id="searchBar" placeholder="Search">
            </form>
            <div id="resultsContainer"></div>
            <input type='text' id="RsearchBar">
            


            <img src="Pics/Background/user.png" id="Anonym">
            <?= $_SESSION["username"] ?? "" ? "<span id='floatright'>Hi,<br>{$_SESSION["username"]}</span>" : "" ?>



            <span><ion-icon id="Anonym" name="person-circle-outline"></ion-icon></span>
            <?php
            if (!isset($_SESSION["username"])) {
                echo "<button class='Authentification'>Se connecter</button>";
            }
            ?>
            <a href="javascript:void(0)" id='Sbutton'></a>
            <div id="user_dpmenu">
                <span id="username">
                    <?php
                    if (isset($_SESSION["username"])) {
                        echo $_SESSION["username"];
                        echo "<script>
                                document.getElementById('Anonym').style.display = 'inline-block';
                             </script>";
                    } else {
                        echo "<script>
                                document.getElementById('Anonym').style.display = 'none';
                             </script>";
                    }
                    ?>
                </span>
                <ul id="DP">
                    <li> <span class="usermenubtn 1"><ion-icon name="person-outline"></ion-icon></span><a href="Monprofile2.php" target=""> Mon Profil </a> </li>
                    <li> <span class="usermenubtn 2"><ion-icon name="settings-outline"></ion-icon></span><a href="index.php?id=1021"> Changer mot de passe</a> </li>
                    <li> <span  class="usermenubtn 3"><ion-icon name="information-circle-outline"></ion-icon></span><a id="help" href="#"> Aide et confidentialité</a> </li>
                    <li> <span class="usermenubtn 4"><ion-icon name="log-out-outline"></ion-icon></span><a href="includes/logout.inc.php"> Se deconnecter </a></li>
                </ul>
            </div>
            <?php
            if (!isset($_SESSION["username"])) {
                echo "<a href='' class='Authentification'></a>";
            }
            ?>
            <a href="" id='Options'></a>
        
        <ul id="Consultation_list">
            <form>
                <li><a href="search.php" id="Hebergement">Hebergement </a></li>
                <li><a href="search.php" id="Restaurant">Restaurants </a></li>
                <li><a href="search.php" id="Activites">Activités</a></li>
            </form>
        </ul>

    </header>
    <main>