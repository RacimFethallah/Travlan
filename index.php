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