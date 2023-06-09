





if (/^http:\/\/localhost\/travlan\/(#|index\.php)?$/.test(window.location.href)) {
    let sliderInterval;
    showImage(1);
    sliderInterval = setInterval(slideImages, Delay);
    boxes.forEach(box => {
        // Ternary operator
        box.addEventListener('mouseover', () => {
            sliderInterval = sliderInterval ? clearInterval(sliderInterval) : sliderInterval;
        })
        box.addEventListener('mouseout', () => {
            sliderInterval = sliderInterval ? sliderInterval : setInterval(slideImages, Delay);
        })
    });
}



document.addEventListener('DOMContentLoaded', () => {
    if (window.location.href.indexOf('search.php') !== -1) {
        const sortBy = sortOptions.value;
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);

        const searchQuery = urlParams.get('search');

        if (searchQuery.trim() === '') {
            return; // Exit the function without making the AJAX request
        }
        spanTitle.innerHTML = searchQuery;

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
    }
});



// vider le resultcontainer quand on clique ailleur
document.addEventListener('click', (event) => {
    const isSearchBarClicked = (event.target === searchBar);
    const isResultsContainerClicked = (resultsContainer.contains(event.target));

    if (!isSearchBarClicked && !isResultsContainerClicked) {
        resultsContainer.style.display = "none";
    }
});

// Écouter les événements de saisie dans la barre de recherche
searchBar.addEventListener('keyup', function (event) {
    resultsContainer.style.display = "inline-block";
    const searchTerm = event.target.value;

    const hiddenSubmitButton = document.createElement('button');
    hiddenSubmitButton.type = 'submit';
    hiddenSubmitButton.style.display = 'none';

    // Append the hidden submit button to the form
    searchformS.appendChild(hiddenSubmitButton);
    searchDestinations(searchTerm, resultsContainer, searchBar, hiddenSubmitButton);
});

searchformS.addEventListener('submit', (event) => {
    event.preventDefault();
    const searchQuery = searchBar.value;
    window.location.replace(`search.php?search=${encodeURIComponent(searchQuery)}`);
});




RSearchBar.addEventListener('keyup', function (event) {
    const searchTerm = event.target.value;
    searchDestinations(searchTerm);
});

User_img.addEventListener('click', function (event) {
    if (event.target.id === "Anonym") {
        Dp_menu.classList.toggle("after");
    }
});


SearchButton.addEventListener("click", function (event) {
    RSearchBar.style.display = RSearchBar.style.display === "block" ? "none" : "block";
    event.preventDefault();
});


registerLink.addEventListener('click', () => {
    wrapper.classList.add('active')
});


loginLink.addEventListener('click', () => {
    wrapper.classList.remove('active')
    rememberCheckbox.checked = false;
});


authButtons.forEach(function (button) {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        if (wrapper.classList.contains('hidden') === false) {
            wrapper.classList.add('hidden');
        }
    });
});

userMenuBtn.forEach(function (button) {
    button.addEventListener('click', function () {
        if (button.classList.contains('1')) {
            window.location.href = './index.php';

        } else if (button.classList.contains('2')) {
            window.location.href = './index.php?id=1021';

        } else if (button.classList.contains('3')) {
            window.location.href = './index.php';

        } else if (button.classList.contains('4')) {
            window.location.href = 'includes/logout.inc.php'
        }
    })
});


closeLogin.addEventListener('click', () => {
    wrapper.classList.remove('hidden');
    wrapper.classList.remove('active');
    document.getElementById('chkpwd').checked = false;
});


// Check if there's a stored password in the cookie
if (storedPassword) {
    // Set the password input value to the stored password
    passwordInput.value = storedPassword;
    // Check the "Retenir le mot de passe" checkbox
    rememberCheckbox.checked = true;
}

// Add an event listener to the password input field
passwordInput.addEventListener('input', () => {
    // Check if the "Retenir le mot de passe" checkbox is checked
    if (rememberCheckbox.checked) {
        // Store the new password in the cookie for 7 days
        setCookie('rememberedPassword', passwordInput.value, 1);
    }
});

// Add an event listener to the "Retenir le mot de passe" checkbox
rememberCheckbox.addEventListener('change', () => {
    if (rememberCheckbox.checked) {
        // Store the password in a cookie for 7 days
        setCookie('rememberedPassword', passwordInput.value, 1);
    } else {
        // Remove the stored password cookie
        deleteCookie('rememberedPassword');
    }
});



// aide et confidentialité section 
help.addEventListener('click', (event) => {
    event.preventDefault();


    
    // Create elements
    var div = document.createElement("div");
    var span = document.createElement("span");
    var box = document.createElement("div");
    var closeIcon = document.createElement("ion-icon");

    // Set attributes and content
    div.className = "login-wrapper hidden";
    span.className = "icon-close";
    box.className = "box";
    box.style.height = "100%";
    box.style.overflow = "auto";
    closeIcon.name = "close";


    box.innerHTML = `
    <h1>Aide et Confidentialité</h1>
    <h2>Informations que nous collectons:</h2>
    <p>Informations personnelles: cela inclut votre nom, votre adresse e-mail, et d'autres informations que vous fournissez lorsque vous vous inscrivew à nos services.</p>
    <h2>Comment nous utilisons vos informations:</h2>
    <p>Nous utilisons vos informations personnelles pour vous fournir nos services, pour communiquer avec vous à propos de nos services et pour améliorer nos services. Nous pouvons également utiliser vos informations pour vous envoyer des communications marketing, si vous avez choisi de les recevoir. Nous utilisons les informations d'utilisation pour analyser la façon dont notre site Web et nos services sont utilisés, pour diagnostiquer les problèmes avec notre application et nos services, et pour améliorer notre application et nos services.</p>
    <h2>Comment nous protégeons vos informations:</h2>
    <p>Nous utilisons des mesures de sécurité raisonnables pour protéger vos informations personnelles contre tout accès, utilisation ou divulgation non autorisés. Cependant, aucune méthode de transmission sur Internet ou méthode de stockage électronique n'est sécurisée à 100%, et nous ne pouvons garantir la sécurité absolue de vos informations personnelles.</p>
    <h2>Partage d'informations:</h2>
    <p>Nous ne vendons, ne louons ni ne partageons vos informations personnelles avec des tiers, sauf tel que décrit dans la présente politique de confidentialité. Nous pouvons partager vos informations personnelles avec nos fournisseurs de services qui ont besoin d'accéder à vos informations personnelles pour nous fournir des services. Nous pouvons également partager vos informations personnelles si nous pensons de bonne foi que la divulgation est nécessaire pour se conformer à la loi, à la réglementation, à la procédure judiciaire ou à la demande gouvernementale en vigueur.</p>
    <h2>Vos droits :</h2>
    <p>Vous avez le droit d'accéder, de corriger ou de supprimer vos informations personnelles que nous détenons à votre sujet. Vous pouvez également avoir le droit de vous opposer ou de restreindre le traitement de vos informations personnelles et de recevoir une copie de vos informations personnelles dans un format structuré et lisible par machine.</p>
    <h2>Modifications de cette politique de confidentialité :</h2>
    <p>Nous pouvons mettre à jour cette politique de confidentialité de temps à autre. Si nous apportons des modifications importantes à cette politique de confidentialité, nous vous en informerons par e-mail ou en publiant un avis sur notre application.</p>
    <h2>Contactez-nous :</h2>
    <p>Si vous avez des questions ou des préoccupations concernant cette politique de confidentialité, ou si vous souhaitez exercer vos droits concernant vos informations personnelles, veuillez nous contacter via ce site Web, l'application mobile ou les coordonnées ci-dessus.</p>
    `

    span.appendChild(closeIcon);
    div.appendChild(span);
    div.appendChild(box);
    document.body.appendChild(div);

    // Add event listeners
    span.addEventListener('click', () => {
        document.body.removeChild(div);
    });

});









