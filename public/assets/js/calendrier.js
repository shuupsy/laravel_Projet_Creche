const btnJour = document.querySelectorAll('#btnJour');
const container = document.querySelector('.containerCalendrier');
const divDays = document.querySelector('.days');

const activityContainer = document.querySelector('.activitesContainer');

const titre = document.createElement('p');

const contenu = document.querySelector('.noShow');


btnJour.forEach(element => {
    element.addEventListener("click", ()=>{
        btnJour.forEach(btn=>{
            btn.removeAttribute('class', 'activeDay');

        });

        element.setAttribute('class', 'activeDay');

        if(contenu.classList.contains('contenuCalendrier')){
            contenu.removeAttribute('class', 'contenuCalendrier');
            contenu.setAttribute('class', 'noShow');
        }else{
            contenu.setAttribute('class', 'contenuCalendrier');
        }

        // const activites = document.createElement('div');
        // activites.setAttribute('class', 'activites');
        // activityContainer.appendChild(activites)
        // const titre = document.createElement('p');
        // titre.setAttribute('class', 'titre');
        // activites.appendChild(titre);

    });
 });


