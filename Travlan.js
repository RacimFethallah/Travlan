let User_img = document.getElementById('Anonym');
let Dp_menu = document.getElementById('user_dpmenu');
let currentImageIndex = 0;
let Delay = 3000;
let x = 1;
let SearchButton = document.getElementById('Sbutton');
let SearchBar = document.getElementById('RsearchBar');
let loginBtn = document.getElementById('loginBtn');
let authButtons = document.querySelectorAll('.Authentification');
let userMenuBtn = document.querySelectorAll('.usermenubtn');
let boxes = document.querySelectorAll('.boxe');


const wrapper = document.querySelector('.login-wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const closeLogin = document.querySelector('.icon-close');
const passwordInput = document.getElementById('userpwd');
const rememberCheckbox = document.getElementById('chkpwd');


Dp_menu.className = "before";

function appear(event) {
    let e = event.target;
    if (e.id == "Anonym") {
        if (Dp_menu.className == "before") {
            Dp_menu.classList.remove('before');
            Dp_menu.classList.add('after');
        } else {
            Dp_menu.classList.remove('after');
            Dp_menu.classList.add('before');
        }
    }
}


function ShowhideSearchBar() {
    if (x % 2 === 0) {
        SearchBar.style.display = "block";
    } else {
        SearchBar.style.display = "none";
    }
    x++;
}


let sliderInterval;

function showImage(n) {
    const images = document.getElementsByClassName('slider-image');
    const buttons = document.getElementsByClassName('Bg-button');
    const slides = document.querySelectorAll('.appear, .hide');


    for (let i = 0; i < images.length; i++) {
        images[i].classList.remove('active');
        buttons[i].classList.remove('active');
        slides[i].classList.remove('appear');
        slides[i].classList.add('hide');
        buttons[i].style.setProperty('--bg-color', '#fff');
    }
    images[n - 1].classList.add('active');
    buttons[n - 1].classList.add('active');
    slides[n - 1].classList.add('appear');
    slides[n - 1].classList.remove('hide');
    buttons[n - 1].style.setProperty('--bg-color', 'rgb(2, 56, 126)');
    currentImageIndex = n;
}


//function slideImages() {
//    const images = document.getElementsByClassName('slider-image');
//    currentImageIndex++;
//    if (currentImageIndex > images.length) {
//        currentImageIndex = 1;
//    }
//    showImage(currentImageIndex);
//}


if ((location.href.indexOf('index') !== -1)) {
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


SearchButton.addEventListener("click", ShowhideSearchBar);
User_img.addEventListener('click', appear);


registerLink.addEventListener('click', () => {
    wrapper.classList.add('active')
});


loginLink.addEventListener('click', () => {
    wrapper.classList.remove('active')
    rememberCheckbox.checked = false;
});

function checkSession(event) {
    if ((sessionStorage.getItem('logged_in') === 'true') && (event.target.id === 'Planifier')) {
        window.location.href = "Travlan_plan.php";
    } else {
        if (wrapper.classList.contains('hidden') === false) {
            wrapper.classList.add('hidden');
        }
    }
}


authButtons.forEach(function (button) {
    button.addEventListener('click', function () {
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
const storedPassword = getCookie('rememberedPassword');
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


function checkPasswordMatch(input1, input2) {
    if (input1.value === input2.value) {
        input2.setCustomValidity("");
    } else {
        input2.setCustomValidity("Les mots de passes doivents etre identique!");
    }
}


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


// ------------------------- Partie planification ------------------------------------------ //


if (location.href.indexOf('Travlan_plan') !== -1) {
    let body = document.querySelector('body');
    body.className = 'plan';


    var slide = document.getElementById('Budget_general');
    var budget_general = document.getElementById('BG');
    budget_general.value = slide.value;
    budget_general.addEventListener("input", modvalue);

    slide.onchange = function () {
        budget_general.value = this.value;
    }

    var vplus = document.getElementById("plus");
    var B_container = document.getElementById("Budget_container");

    //Voir_plus de Budget
    function ajoutelements() {
        vplus.className = "bye";
        vplus.innerHTML = "- Voir moins";
        var Bh_con = document.createElement('div');
        var Ba_con = document.createElement('div');
        var Bt_con = document.createElement('div');
        var Br_con = document.createElement('div');
        var Be_con = document.createElement('div');
        Bh_con.className = 'con';
        Ba_con.className = 'con';
        Bt_con.className = 'con';
        Br_con.className = 'con';
        Be_con.className = 'con';

        var label_s1 = document.createElement('label');
        label_s1.innerHTML = "Votre budget Hebergement";
        label_s1.className = 's1';
        var slide1 = document.createElement('input');
        slide1.type = "range";
        slide1.min = 0;
        slide1.max = slide.value;
        slide1.id = "Budget_Hebergement";
        slide1.className = "slider";
        var budget_hebergement = document.createElement('input');
        budget_hebergement.type = "number";
        budget_hebergement.className = 'valeur';
        budget_hebergement.value = slide1.value;
        Bh_con.appendChild(label_s1);
        Bh_con.appendChild(slide1);
        Bh_con.appendChild(budget_hebergement);
        slide1.onchange = function () {
            budget_hebergement.value = this.value;
        }
        budget_hebergement.addEventListener('input', modvalue);


        var label_s2 = document.createElement('label');
        label_s2.innerHTML = "Votre budget Activité";
        var slide2 = document.createElement('input');
        slide2.type = "range";
        slide2.min = 0;
        slide2.max = slide1.value;
        slide2.id = "Budget_Activité";
        slide2.className = "slider";
        var budget_activité = document.createElement('input');
        budget_activité.type = "number";
        budget_activité.className = 'valeur';
        budget_activité.value = slide2.value;
        Ba_con.appendChild(label_s2);
        Ba_con.appendChild(slide2);
        Ba_con.appendChild(budget_activité);
        slide2.onchange = function () {
            budget_activité.value = this.value;
        }
        budget_activité.addEventListener('input', modvalue);

        var label_s3 = document.createElement('label');
        label_s3.innerHTML = "Votre budget Transport";
        var slide3 = document.createElement('input');
        slide3.type = "range";
        slide3.min = 0;
        slide3.max = slide.value - slide1.value;
        slide3.id = "Budget_Activité";
        slide3.className = "slider";
        var budget_transport = document.createElement('input');
        budget_transport.type = "number";
        budget_transport.className = 'valeur';
        budget_transport.value = slide3.value;
        Bt_con.appendChild(label_s3);
        Bt_con.appendChild(slide3);
        Bt_con.appendChild(budget_transport);
        slide3.onchange = function () {
            budget_transport.value = this.value;
        }
        budget_transport.addEventListener('input', modvalue);

        var label_s4 = document.createElement('label');
        label_s4.innerHTML = "Votre budget Resto";
        var slide4 = document.createElement('input');
        slide4.type = "range";
        slide4.min = 0;
        slide4.max = slide3.value;
        slide4.id = "Budget_Activité";
        slide4.className = "slider";
        var budget_resto = document.createElement('input');
        budget_resto.type = "number";
        budget_resto.className = 'valeur';
        budget_resto.value = slide4.value;
        Br_con.appendChild(label_s4);
        Br_con.appendChild(slide4);
        Br_con.appendChild(budget_resto);
        slide4.onchange = function () {
            budget_resto.value = this.value;
        }
        budget_resto.addEventListener('input', modvalue);

        var label_s5 = document.createElement('label');
        label_s5.innerHTML = "Votre budget Extra";
        var slide5 = document.createElement('input');
        slide5.type = "range";
        slide5.min = 0;
        slide5.max = slide4.value;
        slide5.id = "Budget_Extra";
        slide5.className = "slider";
        var budget_extra = document.createElement('input');
        budget_extra.type = "number";
        budget_extra.className = 'valeur';
        budget_extra.value = slide5.value;
        Be_con.appendChild(label_s5);
        Be_con.appendChild(slide5);
        Be_con.appendChild(budget_extra);
        slide5.onchange = function () {
            budget_extra.value = this.value;
        }
        budget_extra.addEventListener('input', modvalue);

        function modvalue() {
            slide.value = budget_general.value;
            slide1.value = budget_hebergement.value;
            slide2.value = budget_activité.value;
            slide3.value = budget_transport.value;
            slide4.value = budget_resto.value;
            slide5.value = budget_extra.value;
        }

        B_container.style.height = "500px";
        B_container.appendChild(Bh_con);
        B_container.appendChild(Bt_con);
        B_container.appendChild(Ba_con);
        B_container.appendChild(Br_con);
        B_container.appendChild(Be_con);
    }

    vplus.addEventListener('click', ajoutelements);


    function modvalue() {
        slide.value = budget_general.value;
    }


    //Hebergement_apres confirmation du type
    var confirmer = document.getElementById('ok');
    var select = document.getElementById('type');
    var suivant = document.getElementById('Suiv');
    var heb_hot2_con = document.getElementById('Hebergement_container_hotel2')
    var heb_con = document.getElementById('Hebergement_container');
    var heb_log_con = document.getElementById('Hebergement_container_logement');
    var heb_hot_con = document.getElementById('Hebergement_container_hotel');

    confirmer.addEventListener('click', heb_log);
    suivant.addEventListener('click', heb_hot);

    function heb_log() {
        switch (select.value) {
            case "Logement":
                heb_con.classList.remove('appear');
                heb_con.className = 'hide';
                heb_log_con.classList.remove('hide');
                heb_log_con.className = 'appear';
                break;
            case "Hotel":
                heb_con.classList.remove('appear');
                heb_con.className = 'hide';
                heb_hot_con.classList.remove('hide');
                heb_hot_con.className = 'appear';
                break;
            case "deux":
                break;
        }
    }

    function heb_hot() {
        heb_hot_con.classList.remove('appear');
        heb_hot_con.className = 'hide';
        heb_hot2_con.classList.remove('hide');
        heb_hot2_con.className = 'appear';

    }
}


