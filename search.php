<?php
include_once 'header.php';
?>


<aside id="asideSearchPage">
    <!-- Filter section on the left -->
    <h2>
        Filtres
        <button id="resetFiltersButton">Reset</button>
    </h2>
    <form action="filter.php" method="GET">
        <!-- Filter options, checkboxes, dropdowns, etc. -->
        <label>
            <input type="checkbox" name="filter1" value="value1">
            Filter 1
        </label>
        <label>
            <input type="checkbox" name="filter2" value="value2">
            Filter 2
        </label>
        <!-- Additional filters -->

        <button type="submit" id="applyFilter">Apply Filters</button>
    </form>
</aside>



<div class="content-wrapper">
    <section id="sectionSearchPage1">
        <input type="text"  placeholder="Search" id="searchBarB">
        <button type="submit" id="searchbtnB">Search</button>
    </section>


    <section id="sectionSearchPage">
        <!-- Search results display area on the right -->
        <h2>Search Results</h2>
        <ul>
            <li>
                <a href="#">Result 1</a>
                <p>Description of result 1</p>
            </li>
            <li>
                <a href="#">Result 2</a>
                <p>Description of result 2</p>
            </li>
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