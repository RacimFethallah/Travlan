<?php
include_once 'header.php';
?>



<aside id="asideSearchPage">
    <!-- Filter section on the left -->
    <h2>
        Budget
    </h2>
    <!-- Filter options, checkboxes, dropdowns, etc. -->
    <label>
        Budget Total
    </label>
    <span class="argent"></span>
    <label>
        Budget Hebergement
    </label>
    <span class="argent"> </span>
    <label>
        Budget Restaurant
    </label>
    <span class="argent"> </span>
    <label>
        Budget Transport
    </label>
    <span class="argent"> </span>
    <label>
        Budget Extra
    </label>
    <span class="argent"> </span>
    <!-- Additional filters -->
</aside>



<div class="content-wrapper">
    <section id="sectionSearchPage1">
        <form action="" method="POST" id="searchform">
            <input type='submit' id='hebergement1' value="Hebergement">
            <input type='submit' id='restaurant1' value="Restaurants">
            <input type='submit' id='activite1' value="Activites">
        </form>
    </section>
    <div id="resultsContainerB"></div>


    <section id="sectionSearchPage">
        <h2>Results for <span id="resulttitle"></span> <span id="resultnumber"></span></h2>
        <ul class="search-results">

            <!-- Additional search results -->
        </ul>
    </section>

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