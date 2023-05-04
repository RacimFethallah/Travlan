<?php
include_once 'header.php';
?>






<div id="Pays">
    	<label>Pays</label>
    	<label>Ville</label>
    </div> 
	<div id="Infos">
		<label for="Date_depart">Date de depart</label>
	    <input type="date" id="Date_depart" class='date'>	
	    <label for="Date_retour">Date de retour</label>
	    <input type="date" id="Date_retour" class='date'>
	    <label for="Nb_personnes">Nombre de personnes</label>
	    <input type="number" id="Nb_personnes" min=0>
	</div>

	<div id="Budget_container">
		<div id="Bg_con">
      <form action="" method="POST"> 
	     	<label class="s">Votre bugdet maximal</label>
			<input type="range" min=500 max=3000 value =500 class="slider" id="Budget_general"> 
			<input type="number" id="BG" value="500" class="valeur">
    </form>
	    </div>	
	<button id="plus">+ Voir plus</button>
	<button id="Valider">Valider</button>
    </div>
    

<div id="Hebergement_container" class="appear">
	<p>HEBERGEMENT</p>
	<form id="Typsel">
		<label for="type">Type d'hebergement</label>
      <select id="type">
        <option value="Hotel">Hotel</option>
        <option value="Logement">Logement</option>
        <option value="Deux">Les deux</option>
      </select>
	</form>
	<button class="bouton" id="ok">Confirmer</button>
</div>

<div id="Hebergement_container_logement" class="hide">
	<p>LOGEMENT</p>
   
     <label class="c1" id="fnbp">Nombre de pieces</label>
     <input type="number" min=1 class="nb" id="nbp">
     <label class="c1" id="fnbm2" >Nombre de m2</label>
     <input type="number" min=9 class="nb" id="nbm2">
     
	  <label class="c1" id='fwifi'>Wi-fi</label>
	  <label class="switch1">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>

	  <label class="c1" id='fsdb'>Salle-bain privée</label>
	  <label class="switch2">
    <input type="checkbox" id="wifi">
    <span class="sliderr"></span>
    </label>

	  <label class="c1" id='fpis'>Piscine</label>
	  <label class="switch3">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>

	  <label class="c1" id='fbal'>balcon</label>
	  <label class="switch4">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>

	  <label class="c1" id='fparking'>Parking</label>
	  <label class="switch5">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>
	  <label class="c1" id='fani'>Animaux</label>
	  <label class="switch6">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>
	  <label class="c1" id='fsds'>Salle de sport</label>
	  <label class="switch7">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>
	  <label class="c1" id='fresto'>Restaurant</label>
	  <label class="switch8">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>
 
 <button id="Valider">Valider</button>
    

</div>



<div id="Hebergement_container_hotel" class="hide">
  <p>HOTEL</p>
   
     <label class="c1" id="fnbp">Nombre de chambres</label>
     <input type="number" min=1 class="nb" id="nbp">
    <label class="c1" id="nbe"> Etoiles </label>
      <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="5 etoiles">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="4 etoiles et +">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="3 etoiles et +">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="2 etoiles et +">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="1 etoile et +">1 star</label>
  </div>
     
     <label class="c1" id='fwifi'>Offre</label>
    <select id="offre">
        <option value="All inclusive">All inclusive</option>
        <option value="Pension complete">Pension Complete</option>
        <option value="Demi-pension">Demi-pension</option>
        <option value="Petit-dejeuner">Petit-dejeuner</option>
      </select>

    <label class="c1" id='fsdb'>En bord de mer</label>
    <label class="switch2">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>

    <label class="c1" id='fpis'>Spa</label>
    <label class="switch3">
    <input type="checkbox" id="wifi">
    <span class="sliderr"></span>
    </label>

    <label class="c1" id='fbal'>Piscine</label>
    <label class="switch4">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>

    <label class="c1" id='fparking'>Parking</label>
    <label class="switch5">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>
    <label class="c1" id='fani'>Wifi</label>
    <label class="switch6">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>
    <label class="c1" id='fsds'>Salle de sport</label>
    <label class="switch7">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>
    <label class="c1" id='fresto'>Animaux</label>
    <label class="switch8">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>
 
 <button class="bouton" id="Suiv">Suivant</button>
    

</div>

<div id="Hebergement_container_hotel2" class="hide">
  <p>Hotel</p>
     
    <label class="c1" id='fwifi'>Activités sportives</label>
    <label class="switch1">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>

    <label class="c1" id='fsdb'>Blanchisserie</label>
    <label class="switch2">
    <input type="checkbox" id="wifi">
    <span class="sliderr"></span>
    </label>

    <label class="c1" id='fpis'>Garderie Enfants</label>
    <label class="switch3">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>

    <label class="c1" id='fbal'>Salle de jeu</label>
    <label class="switch4">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>

    <label class="c1" id='fparking'>Toboggans</label>
    <label class="switch5">
    <input type="checkbox">
    <span class="sliderr"></span>
    </label>
    
 
 <button id="Valider">Valider</button>
    

</div>


<div id="Activité_container"> 
<p> ACTIVITES </p>
  
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