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
    <title>
        Travlan
    </title>
    <link rel="stylesheet" href="Travlan.css">
    <link rel="icon" href="Pics/UI/location.svg">



</head>

<body>
    <header id="my-header">
        <a href="index.php" id='Logo'></a>
        <form>
            
            <input type='text' id="searchBar">
            <div id="resultsContainer"></div>
            <input type='text' id="RsearchBar">
            


            <img src="Pics/Background/profilePicture.svg" id="Anonym">
            <?= $_SESSION["username"] ?? "" ? "<span id='floatright'>Hi,<br>{$_SESSION["username"]}</span>" : "" ?>



            <span><ion-icon id="Anonym" name="person-circle-outline"></ion-icon></span>
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
                    <li> <span class="usermenubtn 2"><ion-icon name="settings-outline"></ion-icon></span><a href="index.php?id=1021"> Changer mot de passe</a> </li>
                    <li> <span class="usermenubtn 3"><ion-icon name="information-circle-outline"></ion-icon></span><a href=""> Aide </a> </li>
                    <li> <span class="usermenubtn 4"><ion-icon name="log-out-outline"></ion-icon></span><a href="includes/logout.inc.php"> Se deconnecter </a></li>
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