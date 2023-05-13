


//fonction pour rechercher dans la barre de recherche
function searchDestinations(searchTerm, resultContainer) {

    // Effacer les résultats précédents
    resultContainer.innerHTML = '';

    if (searchTerm.trim() === '') {
        return; // Exit the function without making the AJAX request
    }

    // Effectuer une requête AJAX
    fetch('includes/search.inc.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `searchTerm=${encodeURIComponent(searchTerm)}`
    })
        .then(response => response.json())
        .then(results => {
            // Afficher les résultats
            if (Array.isArray(results)) {
                results.forEach(result => {
                    const resultTypes = [
                        { type: 'choses à voir/à faire', icon: '<ion-icon name="ticket-outline"></ion-icon>' },
                        { type: 'hôtels', icon: '<ion-icon name="bed-outline"></ion-icon>' },
                        { type: 'restaurants', icon: '<ion-icon name="restaurant-outline"></ion-icon>' }
                    ];

                    resultTypes.forEach(resultType => {
                        const resultDiv = document.createElement('div');
                        resultDiv.classList.add('result');
                        resultDiv.innerHTML = `<p>${resultType.icon} ${result} ${resultType.type}</p>`;
                        resultDiv.addEventListener('click', () => {
                            window.location.href = `search.php?search=${encodeURIComponent(result)} ${encodeURIComponent(resultType.type)} `;
                        });
                        resultContainer.appendChild(resultDiv);
                    });

                    const resultDiv = document.createElement('div');
                    resultDiv.classList.add('result');
                    resultDiv.innerHTML = `<p>${result}</p>`;
                    resultDiv.addEventListener('click', () => {
                        window.location.href = `index.php?search=${encodeURIComponent(result)}`;
                    });
                    resultContainer.appendChild(resultDiv);

                });
            }
            else {
                const noresultDiv = document.createElement('div');
                noresultDiv.innerHTML = `<p>Aucun résultat trouvé.</p>`;
                resultContainer.appendChild(noresultDiv);
            }
        })
        .catch(error => {
            console.error('Erreur lors de la requête AJAX:', error);
        });
}