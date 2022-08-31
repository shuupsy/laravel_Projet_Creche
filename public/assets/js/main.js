/* NAVBAR */

let btn = document.querySelector('#btn')
let sidebar = document.querySelector('.sidebar')

btn.onclick = function () {
    sidebar.classList.toggle('open')
}

/* Apparition de modal */
let buttonModal = document.querySelectorAll(".buttonModal");
let modalFull = document.querySelectorAll(".modalFull");

buttonModal.forEach((button, index) => {
    button.addEventListener("click", () => {
        modalFull[index].classList.toggle("hidden")
    })
} )

// Heure actuelle
let clock = document.querySelector('#clock')

function hour(){
    let currentTime = new Date();
    let minutes = ('0'+ currentTime.getMinutes()).slice(-2);
    let time = currentTime.getHours() + ' : ' + minutes;
    clock.innerHTML = time;
}

hour(), setInterval(hour, 6000)

