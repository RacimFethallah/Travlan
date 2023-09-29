<?php
include_once 'header.php';
?>


<aside id="asideSearchPage">
    <!-- Filter section on the left -->
    <h2>
        Filtres
        <button id="resetFiltersButton">Reset</button>
    </h2>
    <form action="filter.php" method="GET" id="filterForm">
        <!-- Filter options, checkboxes, dropdowns, etc. -->
        <label class="filter">
            <input type="checkbox" name="Hotel" value="value1">
            Hotel
        </label>
        <label>
            <label class="filter">
                <input type="checkbox" name="1-star" value="value2">
                <img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star">
            </label>
            <label class="filter">
                <input type="checkbox" name="2-star" value="value3">
                <img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star"><img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star">
            </label>
            <label class="filter">
                <input type="checkbox" name="3-star" value="value4">
                <img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star"><img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star"><img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star">
            </label>
            <label class="filter">
                <input type="checkbox" name="4-star" value="value5">
                <img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star"><img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star"><img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star"><img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star">
            </label>
            <label class="filter">
                <input type="checkbox" name="5-star" value="value6">
                <img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star"><img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star"><img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star"><img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star"><img src="https://img.icons8.com/pulsar-color/48/star.png" alt="star" id="one-star">
            </label>
        </label>
        <label class="filter">
            <input type="checkbox" name="Hebergement" value="value4">
            Hebergement
        </label>
        <label class="filter">
            <input type="checkbox" name="All inclusive" value="value5">
            All inclusive
        </label>
        <label class="filter">
            <input type="checkbox" name="Pension Complete" value="value6">
            Pension Complete
        </label>
        <label class="filter">
            <input type="checkbox" name="Demi-Pension" value="value7">
            Demi-Pension
        </label>
        <label class="filter">
            <input type="checkbox" name="Petit-Dejeuner" value="value8">
            Petit-Dejeuner
        </label>
        <label class="filter">
            <input type="checkbox" name="Bord-de-mer" value="value9">
            Bord de mer
        </label>
        <label class="filter">
            <input type="checkbox" name="Piscine" value="value10">
            Piscine
        </label>
        <!-- Additional filters -->

        <button type="submit" id="applyFilter">Apply Filters</button>
    </form>
</aside>



<div class="content-wrapper">
    <section id="sectionSearchPage1">
        <form action="search.php" method="POST" id="searchform">
            <input type="text" placeholder="Search" id="searchBarB">
            <button type="submit" id="searchbtnB">Search</button>
        </form>
    </section>
    <div id="resultsContainerB"></div>


    <section id="sectionSearchPage">
        <h2>Results for <span id="resulttitle"></span> <span id="resultnumber"></span>
            <span id="sort">Trier par<select id="sortOptions">
                    <option value="Nom A-Z">Nom A-Z</option>
                    <option value="Nom Z-A">Nom Z-A</option>
                    <option value="Prix asc">Prix asc</option>
                    <option value="Prix desc">Prix desc</option>
                    <option value="Note">Note</option>
                </select></span>
        </h2>
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