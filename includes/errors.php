<?php
require_once 'functions.inc.php';
if (isset($_GET["error"])) {
    if ($_GET["error"] == "invalidemail") {
        echo "<div class='login-wrapper hidden'>
            <div class='box login'> <h2>Email invalide !</h2> <ion-icon name='close-circle' class='closebtn'></ion-icon> </div></div>";
        echo "<script>
                    document.querySelector('.closebtn').addEventListener('click', function() {
                        var parentElement = this.parentNode.parentNode;
                        parentElement.parentNode.removeChild(parentElement);
                        window.location.href = './Travlan.php?error=invalidemail2';
                    });
                  </script>";
        
    } else if ($_GET["error"] == "invalidemail2"){
        resetmailpage();
    } else if ($_GET["error"] == "usernametaken") {
        echo "<div class='login-wrapper hidden'>
            <div class='box login'> <h2>Nom d'utilisateur ou email existe déjà !</h2> <ion-icon name='close-circle' class='closebtn'></ion-icon> </div></div>";
        echo "<script>
                    document.querySelector('.closebtn').addEventListener('click', function() {
                        var parentElement = this.parentNode.parentNode;
                        parentElement.parentNode.removeChild(parentElement);
                        document.querySelector('.login-wrapper').classList.add('hidden');
                        document.querySelector('.login-wrapper').classList.add('active');
                    });
                  </script>";
    } else if ($_GET["error"] == "stmterror") {
        echo "<script> alert('Something went wrong!')</script>";
    } else if ($_GET["error"] == "wronglogin") {
        echo "<div class='login-wrapper hidden'>
            <div class='box login'> <h1>Adresse email ou mot de passe invalide !</h1> <ion-icon name='close-circle' class='closebtn'></ion-icon> </div></div>";
        echo "<script>
                    document.querySelector('.closebtn').addEventListener('click', function() {
                        var parentElement = this.parentNode.parentNode;
                        parentElement.parentNode.removeChild(parentElement);
                        document.querySelector('.login-wrapper').classList.add('hidden');
                    });
                  </script>";
    } else if ($_GET["error"] == "rnone") {
        echo "<div class='login-wrapper hidden'>
            <div class='box login'> <h2>Inscription réussi !</h2> <ion-icon name='checkmark-circle' class='closebtn'></ion-icon> </div></div>";
        echo "<script>
            document.querySelector('.closebtn').addEventListener('click', function() {
                        var parentElement = this.parentNode.parentNode;
                        parentElement.parentNode.removeChild(parentElement);
                        window.location.href = './Travlan.php';
                    });
                  </script>";
    } else if ($_GET["error"] == "lnone") {
        echo "<div class='login-wrapper hidden'>
            <div class='box login'> <h2>Connexion réussi !</h2><ion-icon name='checkmark-circle' class='closebtn'></ion-icon></div></div>";
        echo "<script>
                    document.querySelector('.closebtn').addEventListener('click', function() {
                        var parentElement = this.parentNode.parentNode;
                        parentElement.parentNode.removeChild(parentElement);
                        window.location.href = './Travlan.php';
                    });
                  </script>";
    } else if ($_GET["error"] == "emailsent"){
        echo "<div class='login-wrapper hidden'>
            <div class='box login'> <h1>Un lien de réinitialisation à été envoyé à votre adresse Email</h1> <ion-icon name='checkmark-circle' class='closebtn'></ion-icon> </div></div>";
        echo "<script>
                    document.querySelector('.closebtn').addEventListener('click', function() {
                        var parentElement = this.parentNode.parentNode;
                        parentElement.parentNode.removeChild(parentElement);
                        window.location.href = './Travlan.php';
                    });
                  </script>";
    }else if ($_GET["error"] == "pnone"){
        echo "<div class='login-wrapper hidden'>
            <div class='box login'> <h1>Mot de passe réinitialisé avec succès</h1> <ion-icon name='checkmark-circle' class='closebtn'></ion-icon> </div></div>";
        echo "<script>
                    document.querySelector('.closebtn').addEventListener('click', function() {
                        var parentElement = this.parentNode.parentNode;
                        parentElement.parentNode.removeChild(parentElement);
                        document.querySelector('.login-wrapper').classList.add('hidden');
                    });
                  </script>";
    }
}
