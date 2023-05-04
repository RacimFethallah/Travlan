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
      <h1 class="text">Arashiyama</h1>
   </button>
   <button class="boxe" id="j2">
      <h1 class="text">Itsukushima-jinja</h1>
   </button>
   <button class="boxe" id="j3">
      <h1 class="text">Mont Fuji</h1>
   </button>
   <button class="boxe" id="j4">
      <h1 class="text">Fushimi Inari</h1>
   </button>
</div>

<div id="slide2" class="hide">
   <button class="boxe" id="j1">
      <h1 class="text">Tokyo</h1>
   </button>
   <button class="boxe" id="j2">
      <h1 class="text">Blablabla</h1>
   </button>
   <button class="boxe" id="j3">
      <h1 class="text">Tokyo</h1>
   </button>
   <button class="boxe" id="j4">
      <h1 class="text">r+TOKJYIJ</h1>
   </button>
</div>

<div id="slide3" class="hide">
   <button class="boxe" id="j1">
      <h1 class="text">Tokyo</h1>
   </button>
   <button class="boxe" id="j2">
      <h1 class="text">Blablabla</h1>
   </button>
   <button class="boxe" id="j3">
      <h1 class="text">Tokyo</h1>
   </button>
   <button class="boxe" id="j4">
      <h1 class="text">r+TOKJYIJ</h1>
   </button>
</div>

<div id="slide4" class="hide">
   <button class="boxe" id="j1">
      <h1 class="text">Tokyo</h1>
   </button>
   <button class="boxe" id="j2">
      <h1 class="text">Blablabla</h1>
   </button>
   <button class="boxe" id="j3">
      <h1 class="text">Tokyo</h1>
   </button>
   <button class="boxe" id="j4">
      <h1 class="text">r+TOKJYIJ</h1>
   </button>
</div>

<div id="slide5" class="hide">
   <button class="boxe" id="j1">
      <h1 class="text">Tokyo</h1>
   </button>
   <button class="boxe" id="j2">
      <h1 class="text">Blablabla</h1>
   </button>
   <button class="boxe" id="j3">
      <h1 class="text">Tokyo</h1>
   </button>
   <button class="boxe" id="j4">
      <h1 class="text">r+TOKJYIJ</h1>
   </button>
</div>

<div id="slide6" class="hide">
   <button class="boxe" id="j1">
      <h1 class="text">Tokyo</h1>
   </button>
   <button class="boxe" id="j2">
      <h1 class="text">Blablabla</h1>
   </button>
   <button class="boxe" id="j3">
      <h1 class="text">Tokyo</h1>
   </button>
   <button class="boxe" id="j4">
      <h1 class="text">r+TOKJYIJ</h1>
   </button>
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