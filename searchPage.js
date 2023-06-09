


// ------------------------- Partie recherche ------------------------------------------ //






const bigSearchBar = document.getElementById('searchBarB');
const bigResultsContainer = document.getElementById('resultsContainerB');
const searchForm = document.getElementById('searchform');
const spanTitle = document.getElementById('resulttitle');
const searchBtnB = document.getElementById('searchbtnB');
const resetFiltersButton = document.getElementById('resetFiltersButton');
const filterForm = document.getElementById('filterForm');



//pour verifier si on se trouve dans la page search
if (location.href.indexOf('search') !== -1) {
    body.className = 'search';
    // const queryString = window.location.search;
    // const urlParams = new URLSearchParams(queryString);

    // // Get the value of the "search" parameter
    // spanTitle.innerHTML = urlParams.get('search');

    //supprimer les valeurs de recherche quand on clique ailleur
    document.addEventListener('click', (event) => {
        const isSearchBarClicked = (event.target === searchBar) || (event.target === bigSearchBar);
        const isResultsContainerClicked = (resultsContainer.contains(event.target)) || (bigResultsContainer.contains(event.target));

        if (!isSearchBarClicked && !isResultsContainerClicked) {
            resultsContainer.style.display = "none";
            bigResultsContainer.style.display = "none";
        }
    });



    //recherche dans la grosse barre de recherche
    bigSearchBar.addEventListener('keyup', function (event) {
        bigResultsContainer.style.display = "inline-block";
        const searchTerm = event.target.value;
        searchDestinations(searchTerm, bigResultsContainer,bigSearchBar,searchBtnB);
    });

    //soumission du formulaire de la grosse barre de recherche
    searchForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const searchQuery = bigSearchBar.value;
        window.location.replace(`search.php?search=${encodeURIComponent(searchQuery)}`);
    });



    resetFiltersButton.addEventListener('click', function (event) {
        event.preventDefault();
        filterForm.reset();
    });


    sortOptions.addEventListener('change', () => {
        const sortBy = sortOptions.value;
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const searchQuery = urlParams.get('search');
        fetch('includes/search.inc.php', {
            method: 'POST',
            body: new URLSearchParams({
                searchQuery: searchQuery,
                sortBy: sortBy
            })
        })
            .then(response => response.json())
            .then(data => {
                const numResults = data.numResults;
                const searchResults = data.searchResults;

                // Update the <span> element with the number of results
                const resultNumberSpan = document.getElementById('resultnumber');
                resultNumberSpan.textContent = '(' + numResults + ')';

                // Call a function to display the search results
                displaySearchResults(searchResults);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    })






}

