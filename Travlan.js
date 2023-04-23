var User_img = document.getElementById('Anonym'); 
var Dp_menu= document.getElementById('user_dpmenu');
let currentImageIndex = 1;
let Delay = 2000;
let x = 1;
let SearchButton = document.getElementById('Sbutton');
let SearchBar = document.getElementById('RsearchBar');




const wrapper = document.querySelector('.login-wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const authentification = document.getElementById('Authentification');
const closeLogin = document.querySelector('.icon-close');

Dp_menu.className="before";

function appear(event) { 
	var e= event.target; 
	if(e.id=="Anonym") { if (Dp_menu.className=="before") {Dp_menu.classList.remove('before'); 
		Dp_menu.classList.add('after');} 
		else {
		Dp_menu.classList.remove('after'); 
		Dp_menu.classList.add('before');
		}
	}

}


function ShowhideSearchBar()
{
  event.preventDefault();
  if (x % 2 == 0){
  SearchBar.style.display = "block";
  }else
  {
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
  Delay = 500;
}

setInterval(slideImages, Delay);


SearchButton.addEventListener("click", ShowhideSearchBar);
User_img.addEventListener('click',appear);




registerLink.addEventListener('click', ()=>{
  wrapper.classList.add('active')
});

loginLink.addEventListener('click', ()=>{
  wrapper.classList.remove('active')
});

authentification.addEventListener('click', ()=>{
  wrapper.classList.add('hidden');
});

closeLogin.addEventListener('click', ()=>{
  wrapper.classList.remove('hidden');
  wrapper.classList.remove('active');
});
