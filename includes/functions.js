let User_img = document.getElementById('Anonym');
let Dp_menu = document.getElementById('user_dpmenu');
let SearchButton = document.getElementById('Sbutton');
let RSearchBar = document.getElementById('RsearchBar');
let loginBtn = document.getElementById('loginBtn');
let authButtons = document.querySelectorAll('.Authentification');
let userMenuBtn = document.querySelectorAll('.usermenubtn');
let boxes = document.querySelectorAll('.boxe');
let body = document.querySelector('body');
let currentImageIndex = 0;
let Delay = 3000;

const wrapper = document.querySelector('.login-wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const closeLogin = document.querySelector('.icon-close');
const passwordInput = document.getElementById('userpwd');
const rememberCheckbox = document.getElementById('chkpwd');
const resultsContainer = document.getElementById('resultsContainer');
const searchBar = document.getElementById('searchBar');
const storedPassword = getCookie('rememberedPassword');
const searchformS = document.getElementById('searchFormS');




//fonction pour verifier si l'utilisateur est connecté pour planifier
function checkSession(event) {
    if ((sessionStorage.getItem('logged_in') === 'true') && (event.target.id === 'Planifier')) {
        window.location.href = "Travlan_plan.php";
    } else {
        if (wrapper.classList.contains('hidden') === false) {
            wrapper.classList.add('hidden');
        }
    }
}

//fonction pour rechercher dans la barre de recherche
function searchDestinations(searchTerm, resultContainer, bar, btn) {

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
                            // window.location.href = `search.php?search=${encodeURIComponent(result)} ${encodeURIComponent(resultType.type)} `;
                            bar.value = `${result} ${resultType.type}`;
                            btn.click();
                        });
                        resultContainer.appendChild(resultDiv);
                    });

                    const resultDiv = document.createElement('div');
                    resultDiv.classList.add('result');
                    resultDiv.innerHTML = `<p>${result}</p>`;
                    resultDiv.addEventListener('click', () => {
                        window.location.href = `search.php?search=${encodeURIComponent(result)}`;
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

//fonction pour defiller les images
function showImage(n) {
  const images = document.getElementsByClassName('slider-image');
  const buttons = document.getElementsByClassName('Bg-button');
  const slides = document.querySelectorAll('.appear, .hide');
  let bgInactiveColor = '#fff';
  let bgActiveColor = 'rgb(2, 56, 126)';

  Array.prototype.forEach.call(images, (image, i) => {
    image.classList.toggle('active', i === n - 1);
    buttons[i].classList.toggle('active', i === n - 1);
    slides[i].classList.toggle('appear', i === n - 1);
    slides[i].classList.toggle('hide', i !== n - 1);
    buttons[i].style.setProperty('--bg-color', i === n - 1 ? bgActiveColor : bgInactiveColor);
  });

  currentImageIndex = n;
}

//fonction pour defiller les images
function slideImages() {
  const images = document.getElementsByClassName('slider-image');
  currentImageIndex = (currentImageIndex + 1) % images.length || 0;
  showImage(currentImageIndex + 1);
}


// Helper function to set a cookie
function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

// Helper function to get a cookie
function getCookie(name) {
    const cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i].trim();
        if (cookie.startsWith(name + '=')) {
            return cookie.substring(name.length + 1);
        }
    }
    return null;
}

// Helper function to delete a cookie
function deleteCookie(name) {
    document.cookie = name + "=;expires=Thu, 01 Jan 2999 00:00:01 GMT;path=/";
}

//fonction pour verifier si les mots de passes d'inscription sont identique
function checkPasswordMatch(input1, input2) {
    if (input1.value === input2.value) {
        input2.setCustomValidity("");
    } else {
        input2.setCustomValidity("Les mots de passes doivents etre identique!");
    }
}

//fonction pour verifier si un mot de passe est valide
function passwordValidity(input) {


    const minLength = 8;
    const pattern = /(?=.*\d)(?=.*[a-z])/;


    if (input.value.length < minLength) {
        input.setCustomValidity(`Le mot de passe doit contenir au moins ${minLength} caractères`);
    } else if (!pattern.test(input.value)) {
        input.setCustomValidity("Le mot de passe doit contenir au moins une lettre et un chiffre");
    } else {
        input.setCustomValidity("");
    }
}

//fonction pour verifier si un nom d'utilisateur est valide
function usernameValidity(username) {

    const minLength = 3;
    const maxLength = 36;
    const pattern = /^[a-zA-Z0-9._ ]+$/;

    if (!pattern.test(username.value)) {
        username.setCustomValidity("Utilisez uniquement des lettres (a-z), des chiffres (0-9) et des points et tirets (.) (_).");

    } else if (username.value.length < minLength) {
        username.setCustomValidity(`Utilisez au moins ${minLength} caractères`);

    } else if (username.value.length > maxLength) {
        username.setCustomValidity(`Utilisez au plus ${maxLength} caractères`);
    } else {
        username.setCustomValidity("");
    }
}




function displaySearchResults(searchResults){
    const searchResultsList = document.querySelector('#sectionSearchPage .search-results');



    searchResultsList.innerHTML = '';



    searchResults.forEach(function(result) {
        const listItem = document.createElement('li');
        const resultItem = document.createElement('div');
        const resultImage = document.createElement('img');
        const resultContent = document.createElement('div');
        const resultLink = document.createElement('a');
        const resultDescription = document.createElement('p');
    
        resultItem.classList.add('result-item');
        resultImage.src = result.urlimg;
        // resultImage.alt = result.nom;
        // resultLink.href = result.nom;
        resultLink.textContent = result.nom;
        resultDescription.textContent = result.description;
    
        resultContent.classList.add('result-content');
        resultContent.appendChild(resultLink);
        resultContent.appendChild(resultDescription);
    
        resultItem.appendChild(resultImage);
        resultItem.appendChild(resultContent);
    
        listItem.appendChild(resultItem);
        searchResultsList.appendChild(listItem);
      });

}