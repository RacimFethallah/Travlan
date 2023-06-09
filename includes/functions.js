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


const help = document.getElementById('help');
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
const sortOptions = document.querySelector('#sortOptions');



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
    currentImageIndex++;
    if (currentImageIndex > images.length) {
        currentImageIndex = 1;
    }
    showImage(currentImageIndex);
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
    const pattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;



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




function displaySearchResults(searchResults) {
    const searchResultsList = document.querySelector('#sectionSearchPage .search-results');



    searchResultsList.innerHTML = '';


    if (Array.isArray(searchResults)) {
        searchResults.forEach(function (result) {

            const spanPrice = document.createElement('span');
            const listItem = document.createElement('li');
            const resultItem = document.createElement('div');
            const divImg = document.createElement('div');
            const resultImage = document.createElement('img');
            const resultContent = document.createElement('div');
            const buttonContent = document.createElement('div');
            const resultLink = document.createElement('a');
            const resultDescription = document.createElement('p');
            const buttonDetails = document.createElement('button');
            const buttonSave = document.createElement('button');
            const buttonComment = document.createElement('button');








            const commentSection = document.createElement('div');
            const hiddenInput = document.createElement('input');

            const commentForm = document.createElement('form');
            commentForm.method = "post";
            if (window.location.href.indexOf('h%C3%B4tels') !== -1) {
                commentForm.action = "includes/comment.inc.php?hôtels";
                hiddenInput.className = "commentInput";
                hiddenInput.type = "hidden";
                hiddenInput.name = "hotelName";
                hiddenInput.value = result.nom;
            } else if (window.location.href.indexOf('restaurants')) {
                commentForm.action = "includes/comment.inc.php?restaurants";              
                hiddenInput.className = "commentInput";
                hiddenInput.type = "hidden";
                hiddenInput.name = "restaurantName";
                hiddenInput.value = result.nom;
            }


            const commentInput = document.createElement('input');
            commentInput.className = "commentInput";
            commentInput.placeholder = "Veuiller saisir un commentaire";
            commentInput.type = "text";
            commentInput.name = "comment";
            const addComment = document.createElement('button');
            addComment.type = "submit";
            addComment.name = "addComment";
            addComment.className = "addComment";
            addComment.innerHTML = "<ion-icon name='send-outline'></ion-icon>";
            commentSection.appendChild(commentForm);
            commentForm.appendChild(commentInput);
            commentForm.appendChild(hiddenInput);
            commentForm.appendChild(addComment);

            commentForm.addEventListener('submit', (event) => {
                if (sessionStorage.getItem('logged_in') !== 'true') {
                    alert('Vous devez être connecté pour publier un avis.');
                    if (wrapper.classList.contains('hidden') === false) {
                        wrapper.classList.add('hidden');
                    }
                    event.preventDefault();
                    return; // Stop form submission
                }
            });



            commentSection.className = "comments";


            resultItem.classList.add('result-item');
            resultImage.src = result.urlimg;
            resultLink.textContent = result.nom;
            resultDescription.textContent = result.description;


            buttonDetails.classList.add('resultButtons');
            buttonSave.classList.add('resultButtons');
            buttonComment.classList.add('resultButtons');
            buttonComment.id = "fetchResultsButton";

            buttonDetails.innerHTML = "<ion-icon name='earth-outline'></ion-icon> Site web";

            buttonSave.innerHTML = "<ion-icon name='heart-outline'></ion-icon> Sauvegarder pour plus tard";
            buttonComment.innerHTML = "<ion-icon name='create-outline'></ion-icon>";

            buttonContent.classList.add('buttonContent');
            buttonContent.appendChild(buttonDetails);
            buttonContent.appendChild(buttonSave);
            buttonContent.appendChild(buttonComment);


            spanPrice.classList.add('spanPrice');
            spanPrice.textContent = "€" + result.price;
            resultContent.classList.add('result-content');



            resultContent.appendChild(resultLink);
            resultContent.appendChild(resultDescription);
            resultContent.appendChild(spanPrice);
            resultContent.appendChild(buttonContent);


            divImg.appendChild(resultImage);
            resultItem.appendChild(divImg);
            resultItem.appendChild(resultContent);
            resultItem.appendChild(commentSection);

            listItem.appendChild(resultItem);
            searchResultsList.appendChild(listItem);


            //Bouton poour sauvegarder pour plus tard
            buttonSave.onclick = function () {
                if (sessionStorage.getItem('logged_in') !== 'true') {
                    alert('Vous devez être connecté pour enregistrer.');
                    if (wrapper.classList.contains('hidden') === false) {
                        wrapper.classList.add('hidden');
                    }
                    return; // Stop form submission
                }
                if (!buttonSave.classList.contains('saved')) {
                    buttonSave.innerHTML = "<ion-icon name='checkmark-done-outline'></ion-icon>";
                    buttonSave.classList.add('saved');
                    buttonSave.style.background = "#006b5e";
                    buttonSave.style.color = "#fff";
                }
                else {
                    buttonSave.innerHTML = "<ion-icon name='heart-outline'></ion-icon> Sauvegarder pour plus tard";
                    buttonSave.classList.remove('saved');
                    buttonSave.style.background = "#f1f1f1";
                    buttonSave.style.color = "#162938";
                }
            };

            // Bouton pour ouvrire site web 
            buttonDetails.onclick = function () {
                window.open(result.url, '_blank');
            };


            // Boutton pour les avis
            buttonComment.onclick = function () {
                if (!buttonComment.classList.contains('opened')) {
                    buttonComment.innerHTML = "<ion-icon name='close-outline'></ion-icon>";
                    buttonComment.classList.add('opened');
                    buttonComment.style.background = "#006b5e";
                    buttonComment.style.color = "#fff";
                    commentSection.style.display = "block";
                    const selectedHotel = result.nom;
                    const ul = document.createElement('ul');
                    ul.className = "commentUl";
                    commentSection.appendChild(ul);
                    fetch('includes/comment.inc.php', {
                        method: 'POST',
                        body: new URLSearchParams({
                            commentQuery: selectedHotel
                        })
                    })
                        .then(response => response.json())
                        .then(data => {
                            data.forEach(comment => {
                                // Create a new comment element
                                const li = document.createElement('li');
                                li.className = "commentLi";
                                const spanText = document.createElement('span');
                                spanText.className = "commentText";
                                const spanUser = document.createElement('span');
                                spanUser.className = "userComment";
                                const spanDate = document.createElement('span');
                                spanDate.className = "commentDate";
                                spanUser.className = "userComment";
                                spanDate.textContent = comment.Date_a;
                                spanUser.textContent = comment.username;
                                spanText.textContent = comment.texte;
                                li.appendChild(spanUser);
                                li.appendChild(spanDate);
                                li.appendChild(spanText);
                                ul.appendChild(li);
                            });
                        })
                        .catch(error => {
                            console.log('An error occurred:', error);
                        });
                }
                else {
                    buttonComment.innerHTML = "<ion-icon name='create-outline'></ion-icon>";
                    buttonComment.classList.remove('opened');
                    buttonComment.style.background = "#f1f1f1";
                    buttonComment.style.color = "#162938";
                    commentSection.style.display = "none";
                    const ul = commentSection.querySelector('ul');
                    if (ul) {
                        ul.parentNode.removeChild(ul);
                    }
                }
            }
        });
    } else {
        const NolistItem = document.createElement('li');
        const NoresultDescription = document.createElement('p');
        NoresultDescription.textContent = "No results found.";
        NoresultDescription.classList.add('noResult');
        NolistItem.appendChild(NoresultDescription);
        searchResultsList.appendChild(NolistItem);
    }


}