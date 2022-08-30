/* NAVBAR */

let btn = document.querySelector('#btn')
let sidebar = document.querySelector('.sidebar')

btn.onclick = function () {
    sidebar.classList.toggle('open')
}

/* Apparition de modal */
let buttonModal = document.querySelectorAll(".modalUn");
let modalFull = document.querySelectorAll(".modalFull");

buttonModal.forEach((button, index) => {
    button.addEventListener("click", () => {
        modalFull[index].classList.toggle("hidden")
    })
} )
/* buttonModal.addEventListener("click", () => {
    modalFull.classList.toggle("hidden")
}) */

// Heure actuelle
let clock = document.querySelector('#clock')
hour()
function hour(){
    let currentTime = new Date();
    let time = currentTime.getHours() + ' : ' + currentTime.getMinutes();
    clock.innerHTML = time;
}

/* setInterval(hour, 1000)
 */
setInterval(hour, 6000)

