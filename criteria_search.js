
document.addEventListener('DOMContentLoaded', () => {


    if (location.href.indexOf('criteria_search.php') !== -1) {
        body.className = 'search';


        const urlParams1 = new URLSearchParams(window.location.search);
        const dataParam1 = urlParams1.get('data');


        if (dataParam1) {
            // Decode the parameter and parse the JSON data

            const queryString1 = window.location.search;
            const urlParams1 = new URLSearchParams(queryString1);
            const searchQuery1 = urlParams1.get('data');
            //const decodedData = decodeURIComponent(searchQuery);
            //const data = JSON.parse(decodedData);

            // Access the value of the "data" parameter
            //const dd = data;
             
            
            // Now you can work with the retrieved data
            fetch('includes/criteria_search1.php', {
                method: 'POST',
                body: new URLSearchParams({
                    searchQuery1 : searchQuery1
                })
            })
                .then(response => response.json())
                .then(data => {
                    displaySearchResults(data);
                })
                .catch(error => {
                    // Handle any errors that occurred during the fetch request
                    console.error('Error:', error);
                });
        }




    }

    var restaurant = document.getElementById('restaurant1');
    restaurant.addEventListener('submit',)

})