<?php
session_start();
?>


<html>



<head>
    <title>
        Travlan
    </title>
    <link rel="stylesheet" href="TravlanTest.css">
    <link rel="icon" href="Pics/UI/location.svg">



</head>

<body>
    <header id="my-header">
        <a href="Travlan.php" id='Logo'></a>
        <form>
            <input type='text' id="searchBar">
            <input type='text' id="RsearchBar">
            <img src="Pics/Background/profilePicture.svg" id="Anonym">
            <span ><ion-icon id="Anonym" name="person-circle-outline"></ion-icon></span>
            <?php
            if (!isset($_SESSION["username"])) {
                echo "<button class='Authentification'>Se connecter</button>";
            }
            ?>
            <a href="" id='Sbutton'></a>
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
                    <li> <span class="usermenubtn 1"><ion-icon name="person-outline"></ion-icon></span><a href=""> Mon Profil </a> </li>
                    <li> <span class="usermenubtn 2"><ion-icon  name="settings-outline"></ion-icon></span><a href=""> Modifier Profil </a> </li>
                    <li> <span class="usermenubtn 3"><ion-icon  name="information-circle-outline"></ion-icon></span><a href=""> Aide </a> </li>
                    <li> <span class="usermenubtn 4"><ion-icon  name="log-out-outline"></ion-icon></span><a href="includes/logout.inc.php"> Se deconnecter </a></li>
                </ul>
            </div>
            <?php
            if (!isset($_SESSION["username"])) {
                echo "<a href='' class='Authentification'></a>";
            }
            ?>
            <a href="" id='Options'></a>
        </form>
        <ul id="Consultation_list">
            <form>
                <li><input type="submit" id="Hebergement" value="Hebergement"></li>
                <li><input type="submit" id="Restaurant" value="Restaurants"></li>
                <li><input type="submit" id="Activites" value="Activités"></li>
            </form>
        </ul>
        
    </header>
    <main>