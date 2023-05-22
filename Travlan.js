




if (window.location.href === 'http://localhost/travlan/' || window.location.href.indexOf('index.php') !== -1 || window.location.href === 'http://localhost/travlan/#') {
    let sliderInterval;
    showImage(1);
    sliderInterval = setInterval(slideImages, Delay);
    boxes.forEach(box => {
        box.addEventListener('mouseover', () => {
            clearInterval(sliderInterval);
        })
        box.addEventListener('mouseout', () => {
            sliderInterval = setInterval(slideImages, Delay);
        })
    });
}


document.addEventListener('DOMContentLoaded', () => {
    if (window.location.href.indexOf('search.php') !== -1) {
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
                searchQuery: searchQuery
            })
        })
            .then(response => response.json())
            .then(data => {
                // Call a function to display the search results
                // window.location.href = `search.php?search=${encodeURIComponent(searchQuery)}`;


                displaySearchResults(data);

                
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
    searchDestinations(searchTerm , resultsContainer,searchBar, hiddenSubmitButton);
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

User_img.addEventListener('click', function(event) {
    if (event.target.id === "Anonym") {
        Dp_menu.classList.toggle("after");
    }
});


SearchButton.addEventListener("click", function(event) {
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










