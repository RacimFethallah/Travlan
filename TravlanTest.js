var User_img = document.getElementById('Anonym');
var Dp_menu = document.getElementById('user_dpmenu');
let currentImageIndex = 1;
let Delay = 2000;
let x = 1;
let SearchButton = document.getElementById('Sbutton');
let SearchBar = document.getElementById('RsearchBar');
let loginBtn = document.getElementById('loginBtn');
var authButtons = document.querySelectorAll('.Authentification');
let userMenuBtn = document.querySelectorAll('.usermenubtn');
var password = document.getElementById("pwd");
var username = document.getElementById('nomuti');






const wrapper = document.querySelector('.login-wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const closeLogin = document.querySelector('.icon-close');




Dp_menu.className = "before";

function appear(event) {
  var e = event.target;
  if (e.id == "Anonym") {
    if (Dp_menu.className == "before") {
      Dp_menu.classList.remove('before');
      Dp_menu.classList.add('after');
    }
    else {
      Dp_menu.classList.remove('after');
      Dp_menu.classList.add('before');
    }
  }
}



function ShowhideSearchBar() {
  event.preventDefault();
  if (x % 2 == 0) {
    SearchBar.style.display = "block";
  } else {
    SearchBar.style.display = "none";
  }
  x++;
}


function showImage(n) {
  const images = document.getElementsByClassName('slider-image');
  const buttons = document.getElementsByClassName('Bg-button');

  for (let i = 0; i < images.length; i++) {
    images[i].classList.remove('active');
    buttons[i].classList.remove('active');
  }
  images[n - 1].classList.add('active');
  buttons[n - 1].classList.add('active');
  currentImageIndex = n;

}

function slideImages() {
  const images = document.getElementsByClassName('slider-image');
  const buttons = document.getElementsByClassName('Bg-button');
  currentImageIndex++;
  if (currentImageIndex > images.length) {
    currentImageIndex = 1;
  }
  showImage(currentImageIndex);
  Delay = 700;
}

var randomNum = Math.floor(Math.random() * 6) + 1;
showImage(randomNum);
setInterval(slideImages, Delay);


SearchButton.addEventListener("click", ShowhideSearchBar);
User_img.addEventListener('click', appear);





registerLink.addEventListener('click', () => {
  wrapper.classList.add('active')
});


loginLink.addEventListener('click', () => {
  wrapper.classList.remove('active')
  checkedpwd.checked = false;
});



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
      window.location.href = './Travlan.php';

    } else if (button.classList.contains('2')) {
      window.location.href = './Travlan.php';

    } else if (button.classList.contains('3')) {
      window.location.href = './Travlan.php';

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



const passwordInput = document.getElementById('userpwd');
const rememberCheckbox = document.getElementById('chkpwd');

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








function checkPasswordMatch() {
  var confirm_password = document.getElementById("pwdconf");
  var message = document.getElementById("passwordMatch");
  if (password.value == confirm_password.value) {
    message.innerHTML = "Mots de passe identique!";
    confirm_password.setCustomValidity("");
  } else {
    message.innerHTML = "Mots de passe differents!";
    confirm_password.setCustomValidity("Les mots de passes doivents etre identique");
  }
}




function passwordValidity() {
  const minLength = 8;
  const pattern = /(?=.*\d)(?=.*[a-z])/;

  if (password.value.length < minLength) {
    password.setCustomValidity(`Le mot de passe doit contenir au moins ${minLength} caractères`);
  } else if (!pattern.test(password.value)) {
    password.setCustomValidity("Le mot de passe doit contenir au moins une lettre et un chiffre");
  } else {
    password.setCustomValidity("");
  }
}






function usernameValidity() {
  
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