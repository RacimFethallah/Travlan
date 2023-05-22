

// ------------------------- Partie planification ------------------------------------------ //






if (location.href.indexOf('Travlan_plan') !== -1) {
    
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
    var selectHebergement = document.getElementById('typeH');
    var suivant = document.getElementById('Suiv');
    var heb_hot2_con = document.getElementById('Hebergement_container_hotel2')
    var heb_con = document.getElementById('Hebergement_container');
    var heb_log_con = document.getElementById('Hebergement_container_logement');
    var heb_hot_con = document.getElementById('Hebergement_container_hotel');
    var V1= document.getElementById('Val1');
    var retour1= document.getElementById("Retour1"); 
    var retour2= document.getElementById("Retour2"); 
    var retour3= document.getElementById("Retour3"); 
     
    
    confirmer.addEventListener('click', heb_log);
    suivant.addEventListener('click', heb_hot);
    retour1.addEventListener('click',retour_e_a);
    retour2.addEventListener('click',retour_e_a);
    retour3.addEventListener('click',retour_e_a);
    

    function heb_log() {
        heb_con.classList.remove('appear');
                heb_con.className = 'hide';
        switch (selectHebergement.value) {
            case "Logement":
                heb_log_con.classList.remove('hide');
                heb_log_con.className = 'appear';
                break;
            case "Hotel":
                heb_hot_con.classList.remove('hide');
                heb_hot_con.className = 'appear';
                break;
            case "Deux":
                heb_log_con.classList.remove('hide');
                heb_log_con.className = 'appear';
                V1.innerHTML="Suivant";
                V1.addEventListener('click',suivv);
                break;
        }
    }

    function heb_hot() {
        heb_hot_con.classList.remove('appear');
        heb_hot_con.className = 'hide';
        heb_hot2_con.classList.remove('hide');
        heb_hot2_con.className = 'appear';

    }

    function suivv() {
        heb_log_con.classList.remove('appear');
                heb_log_con.className = 'hide';
        heb_hot_con.classList.remove('hide');
        heb_hot_con.className = 'appear';
    }
}


function retour_e_a(event){
    var e=event.target; 
    switch(e.id) { 
        case "Retour1" : 
        heb_con.classList.remove('hide');
        heb_con.className = 'appear';
        heb_log_con.classList.remove('appear');
        heb_log_con.className = 'hide';
        break;
        case "Retour2":
            heb_con.classList.remove('hide');
            heb_con.className = 'appear';
            heb_hot_con.classList.remove('appear');
                heb_hot_con.className = 'hide'; 
        break;
        case "Retour3":
            heb_hot_con.classList.remove('hide');
                heb_hot_con.className = 'appear'; 
                heb_hot2_con.classList.remove('appear');
                heb_hot2_con.className = 'hide';

    }

    
    
}