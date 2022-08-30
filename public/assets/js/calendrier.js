const btnJour = document.querySelectorAll('#btnJour');
const container = document.querySelector('.containerCalendrier');

const contenu = document.querySelector('.noShow');



btnJour.forEach(element => {
    element.addEventListener("click", ()=>{
        btnJour.forEach(btn=>{
            btn.removeAttribute('class', 'activeDay');
            contenu.removeAttribute('class', 'noShow');
        });
        element.setAttribute('class', 'activeDay');
        contenu.setAttribute('class', 'contenuCalendrier');
    });
 });
