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

      <button class="Bg-button" onclick="showImage(1)">1</button>
      <button class="Bg-button" onclick="showImage(2)">2</button>
      <button class="Bg-button" onclick="showImage(3)">3</button>
      <button class="Bg-button" onclick="showImage(4)">4</button>
      <button class="Bg-button" onclick="showImage(5)">5</button>
      <button class="Bg-button" onclick="showImage(6)">6</button>
   </div>
</div>




<form>
   <input type='submit' id="Reservation" value="Planifier votre voyage">
</form>


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