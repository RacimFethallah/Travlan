<?php
include_once 'header.php';
?>


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
        </a>

            <button class="boxe" id="j2">
                <a href="https://fr.wikipedia.org/wiki/Itsukushima-jinja" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
                <a href="https://goo.gl/maps/sY5NC16fzScWLHH19?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
                <h1 class="text">Itsukushima-jinja</h1>
            </button>
        </a>

            <button class="boxe" id="j3">
                <a href="https://fr.wikipedia.org/wiki/Mont_Fuji" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
                <a href="https://goo.gl/maps/GSDpMcuhYnay8gbV9?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
                <h1 class="text">Mont Fuji</h1>
            </button>
        </a>

            <button class="boxe" id="j4">
                <a href="https://fr.wikipedia.org/wiki/Fushimi_Inari-taisha" class="linki" target="_blank">Wikipedia<ion-icon name="globe"></ion-icon></a>
                <a href="https://goo.gl/maps/UkCMr5FmDj3mQSMU8?coh=178571&entry=tt" class="linki" target="_blank">Maps<ion-icon name="location"></ion-icon></a>
                <h1 class="text">Fushimi Inari</h1>
            </button>
        </a>

    </div>

    <div id="slide2" class="hide">
        <a href="https://fr.wikipedia.org/wiki/Le_Caire" target="_blank">
            <button class="boxe" id="j5">
                <h1 class="text">Le Caire</h1>
            </button>
        </a>
        <a href="https://fr.wikipedia.org/wiki/Sphinx_de_Gizeh" target="_blank">
            <button class="boxe" id="j6">
                <h1 class="text">Sphinx de Gizeh</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Nil" target="_blank">
            <button class="boxe" id="j7">
                <h1 class="text">Nil</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Louxor" target="_blank">
            <button class="boxe" id="j8">
                <h1 class="text">Louxor</h1>
            </button>
        </a>

    </div>

    <div id="slide3" class="hide">
        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j9">
                <h1 class="text">Château de Lismore</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j10">
                <h1 class="text">Falaises de Moher</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j11">
                <h1 class="text">Abbaye de Kylemore</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j12">
                <h1 class="text">Dublin</h1>
            </button>
        </a>

    </div>

    <div id="slide4" class="hide">
        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j13">
                <h1 class="text">New York</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j14">
                <h1 class="text">Las Vegas</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j15">
                <h1 class="text">Hawaii</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j16">
                <h1 class="text">Grand Canyon</h1>
            </button>
        </a>

    </div>

    <div id="slide5" class="hide">
        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j17">
                <h1 class="text">Chutes d'Iguazú</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j18">
                <h1 class="text">Rio de Janeiro</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j19">
                <h1 class="text">Forêt amazonienne</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j20">
                <h1 class="text">Musée de Demain</h1>
            </button>
        </a>

    </div>

    <div id="slide6" class="hide">
        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j21">
                <h1 class="text">Opéra de Sydney</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j22">
                <h1 class="text">Melbourne</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j23">
                <h1 class="text">Great Ocean Road</h1>
            </button>
        </a>

        <a href="https://fr.wikipedia.org/wiki/Arashiyama" target="_blank">
            <button class="boxe" id="j24">
                <h1 class="text">Grande Barrière de corail</h1>
            </button>
        </a>

    </div>


    <a href="#" onclick="checkSession(event)">
        <input type="submit" value="Planifiez votre voyage !" id="Planifier">
    </a>


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