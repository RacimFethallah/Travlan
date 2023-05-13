


// ------------------------- Partie recherche ------------------------------------------ //






const bigSearchBar = document.getElementById('searchBarB');
const bigResultsContainer = document.getElementById('resultsContainerB');
const searchForm = document.getElementById('searchform');
const spanTitle = document.getElementById('resulttitle');

//pour verifier si on se trouve dans la page search
if (location.href.indexOf('search') !== -1) {
    body.className = 'search';
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);

    // Get the value of the "search" parameter
    spanTitle.innerHTML = urlParams.get('search');

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
        
        searchDestinations(searchTerm , bigResultsContainer);
    });

    //soumission du formulaire de la grosse barre de recherche
    searchForm.addEventListener('submit', (event)=>{
        event.preventDefault();
        const searchTerm = bigSearchBar.value;
        if (searchTerm.trim() === '') {
            return; // Exit the function without making the AJAX request
        }
        window.location.href = `search.php?search=${encodeURIComponent(searchTerm)}`;
        
    });





    
}

