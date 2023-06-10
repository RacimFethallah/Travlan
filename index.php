<?php
include_once 'header.php';
?>

<div class="scroll-container"> 
    <div class="scroll-page">
<div class="slider-container">
    <div id="image1" class="slider-image"></div>
    <div id="image2" class="slider-image"></div>
    <div id="image3" class="slider-image"></div>
    <div id="image4" class="slider-image"></div>
    <div id="image5" class="slider-image"></div>
    <div id="image6" class="slider-image"></div>
    <div class="slider-nav">

        <button type="button" class="Bg-button" onclick="showImage(1)"></button>
        <button type="button" class="Bg-button" onclick="showImage(2)"></button>
        <button type="button" class="Bg-button" onclick="showImage(3)"></button>
        <button type="button" class="Bg-button" onclick="showImage(4)"></button>
        <button type="button" class="Bg-button" onclick="showImage(5)"></button>
        <button type="button" class="Bg-button" onclick="showImage(6)"></button>
    </div>
</div>

<div id="slide1" class="appear">
    <button class="boxe" id="j1">
        <a href="https://fr.wikipedia.org/wiki/Arashiyama" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/waJLyoQbTdcf2jZa7?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Arashiyama</h1>
    </button>

    <button class="boxe" id="j2">
        <a href="https://fr.wikipedia.org/wiki/Itsukushima-jinja" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/sY5NC16fzScWLHH19?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Itsukushima-jinja</h1>
    </button>

    <button class="boxe" id="j3">
        <a href="https://fr.wikipedia.org/wiki/Mont_Fuji" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/GSDpMcuhYnay8gbV9?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Mont Fuji</h1>
    </button>

    <button class="boxe" id="j4">
        <a href="https://fr.wikipedia.org/wiki/Fushimi_Inari-taisha" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/UkCMr5FmDj3mQSMU8?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Fushimi Inari</h1>
    </button>

</div>

<div id="slide2" class="hide">
    <button class="boxe" id="j5">
        <a href="https://fr.wikipedia.org/wiki/Le_Caire" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/VPeRZp8PEDepz5t27?coh=178573&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Le Caire</h1>
    </button>
    <button class="boxe" id="j6">
        <a href="https://fr.wikipedia.org/wiki/Sphinx_de_Gizeh" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/nc3HgE1ASVxGpFkA6?coh=178573&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Sphinx de Gizeh</h1>
    </button>

    <button class="boxe" id="j7">
        <a href="https://fr.wikipedia.org/wiki/Nil" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/FqnoEm8Hu2wER3356?coh=178573&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Nil</h1>
    </button>

    <button class="boxe" id="j8">
        <a href="https://fr.wikipedia.org/wiki/Louxor" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/59dEKVxdLvm4RMBx8?coh=178573&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Louxor</h1>
    </button>

</div>

<div id="slide3" class="hide">
    <button class="boxe" id="j9">
        <a href="https://fr.wikipedia.org/wiki/Château_de_Lismore" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/cZL9zf7aCd2pm49b6?coh=178573&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Château de Lismore</h1>
    </button>

    <button class="boxe" id="j10">
        <a href="https://fr.wikipedia.org/wiki/Falaises_de_Moher" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/f6tsDE691GJAiB3g8?coh=178573&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Falaises de Moher</h1>
    </button>

    <button class="boxe" id="j11">
        <a href="https://fr.wikipedia.org/wiki/Abbaye_de_Kylemore" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/pAYaYH2KcoFFW61c6?coh=178573&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Abbaye de Kylemore</h1>
    </button>

    <button class="boxe" id="j12">
        <a href="https://fr.wikipedia.org/wiki/Dublin" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/G1yNLjYVtutBHfNM8?coh=178573&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Dublin</h1>
    </button>

</div>

<div id="slide4" class="hide">
    <button class="boxe" id="j13">
        <a href="https://fr.wikipedia.org/wiki/New_York" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/3XxDMvYgt8dx7Egk9?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">New York</h1>
    </button>

    <button class="boxe" id="j14">
        <a href="https://fr.wikipedia.org/wiki/Las_Vegas" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/LxoEp2CaUdn3Qwoq9?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Las Vegas</h1>
    </button>

    <button class="boxe" id="j15">
        <a href="https://fr.wikipedia.org/wiki/Hawaï" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/b6eenVan6vFPBmiD7?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Hawaii</h1>
    </button>

    <button class="boxe" id="j16">
        <a href="https://fr.wikipedia.org/wiki/Grand_Canyon" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/VxLZDDLBwryTCw6WA?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Grand Canyon</h1>
    </button>

</div>

<div id="slide5" class="hide">
    <button class="boxe" id="j17">
        <a href="https://fr.wikipedia.org/wiki/Chutes_d'Iguazú" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/afy4AfwEg3u7WP8j8?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Chutes d'Iguazú</h1>
    </button>

    <button class="boxe" id="j18">
        <a href="https://fr.wikipedia.org/wiki/Rio_de_Janeiro" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/cz3xvhwJBDf2tWG97?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Rio de Janeiro</h1>
    </button>

    <button class="boxe" id="j19">
        <a href="https://fr.wikipedia.org/wiki/Forêt_amazonienne" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/qTpoTtSim1ahqQgU9?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Forêt amazonienne</h1>
    </button>

    <button class="boxe" id="j20">
        <a href="https://fr.wikipedia.org/wiki/Musée_de_Demain" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/Wwaz2LJy91c4bWTv9?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Musée de Demain</h1>
    </button>

</div>

<div id="slide6" class="hide">
    <button class="boxe" id="j21">
        <a href="https://fr.wikipedia.org/wiki/Opéra_de_Sydney" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/RAdxm8zzv3DoYzZf8?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Opéra de Sydney</h1>
    </button>

    <button class="boxe" id="j22">
        <a href="https://fr.wikipedia.org/wiki/Melbourne" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/NPiqnpcai9jopDZu9?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Melbourne</h1>
    </button>

    <button class="boxe" id="j23">
        <a href="https://fr.wikipedia.org/wiki/Great_Ocean_Road" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/bHezad5buFSjZT6G6?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Great Ocean Road</h1>
    </button>

    <button class="boxe" id="j24">
        <a href="https://fr.wikipedia.org/wiki/Grande_Barrière_de_corail" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
        <a href="https://goo.gl/maps/Gp8tV8sKsgVvAvNNA?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
        <h1 class="text">Grande Barrière de corail</h1>
    </button>

</div>


</div>
<a href="#" onclick="checkSession(event)">
    <input type="submit" value="Planifiez votre voyage !" id="Planifier">
</a>

<div id="ContactInfo" >
  <a href="https://www.instagram.com/tra.vlan/" id="Instagram"  > <img id="InstagramPic" src = "Pics/UI/Instagram.png"> </a>
  <a href="mailto:travlan.webmaster@gmail.com" id="Email" ><img id="EmailPic" src = "Pics/UI/Gmail.png"></a>
  <a href="https://web.facebook.com/profile.php?id=100093256038009" id="Facebook" ><img id="FacebookPic" src = "Pics/UI/Facebook.png"></a>
  <a href="https://twitter.com/Travlann" id="Twitter" ><img id="TwitterPic" src = "Pics/UI/Twitter.png"></a>
</div>

<div id="Aide" class="scroll-page"> 
    <div id="Aide1"> 
    <img width="64" height="64" src="https://img.icons8.com/wired/64/floating-island-beach.png" alt="floating-island-beach"/>
        <h1> QUI SOMMES NOUS ? <h1>
        <p> we're bitches <p>  
    </div> 
    <div id="Aide2"> 
        <h1> QUI SOMMES NOUS ? <h1>
        <p> we're bitches <p>  
    </div>      
    <div id="Aide4"> 
        <h1> QUI SOMMES NOUS ? <h1>
        <p> we're bitches <p>  
    </div> 
</div> 
</div>

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
