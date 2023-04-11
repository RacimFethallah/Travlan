var User_img = document.getElementById('Anonym'); 
var Dp_menu= document.getElementById('user_dpmenu');
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


User_img.addEventListener('click',appear);