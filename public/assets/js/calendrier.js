const btnJour = document.querySelectorAll('#btnJour');
const container = document.querySelector('.containerCalendrier');

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
    });
 });