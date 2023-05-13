let User_img = document.getElementById('Anonym');
let Dp_menu = document.getElementById('user_dpmenu');
let SearchButton = document.getElementById('Sbutton');
let RSearchBar = document.getElementById('RsearchBar');
let loginBtn = document.getElementById('loginBtn');
let authButtons = document.querySelectorAll('.Authentification');
let userMenuBtn = document.querySelectorAll('.usermenubtn');
let boxes = document.querySelectorAll('.boxe');
let body = document.querySelector('body');
let searchformS = document.getElementById('searchFormS');




const wrapper = document.querySelector('.login-wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const closeLogin = document.querySelector('.icon-close');
const passwordInput = document.getElementById('userpwd');
const rememberCheckbox = document.getElementById('chkpwd');
const resultsContainer = document.getElementById('resultsContainer');
const searchBar = document.getElementById('searchBar');
const storedPassword = getCookie('rememberedPassword');




if (window.location.href === 'http://localhost/travlan/' || window.location.href.indexOf('index.php') !== -1) {
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
    searchDestinations(searchTerm , resultsContainer);
});

searchformS.addEventListener('submit', (event)=>{
    event.preventDefault();
        const searchTerm = searchBar.value;
        if (searchTerm.trim() === '') {
            return; // Exit the function without making the AJAX request
        }
        window.location.href = `search.php?search=${encodeURIComponent(searchTerm)}`;
})

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










