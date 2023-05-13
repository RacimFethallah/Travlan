const bigSearchBar = document.getElementById('searchBarB');
const bigResultsContainer = document.getElementById('resultsContainerB');
const searchForm = document.getElementById('searchform');

if (location.href.indexOf('search') !== -1) {
    body.className = 'search';


    document.addEventListener('click', (event) => {
        const isSearchBarClicked = (event.target === searchBar) || (event.target === bigSearchBar);
        const isResultsContainerClicked = (resultsContainer.contains(event.target)) || (bigResultsContainer.contains(event.target));
    
        if (!isSearchBarClicked && !isResultsContainerClicked) {
            resultsContainer.style.display = "none";
            bigResultsContainer.style.display = "none";
        }
    });
    
    
    
    
    bigSearchBar.addEventListener('keyup', function (event) {
        bigResultsContainer.style.display = "inline-block";
        const searchTerm = event.target.value;
        
        searchDestinations(searchTerm , bigResultsContainer);
    });


    searchForm.addEventListener('submit', (event)=>{
        event.preventDefault();
        const searchTerm = bigSearchBar.value;
        if (searchTerm.trim() === '') {
            return; // Exit the function without making the AJAX request
        }
        window.location.href = `search.php?search=${encodeURIComponent(searchTerm)}`;
    });





    
}

