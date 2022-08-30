/* NAVBAR */

let btn = document.querySelector('#btn')
let sidebar = document.querySelector('.sidebar')

btn.onclick = function() {
    sidebar.classList.toggle('open')
}

/* MODAL */
let buttonModal = document.querySelector(".modalUn");

let modalFull = document.getElementById("modalFull");
buttonModal.addEventListener("click", ()=>{
    modalFull.classList.toggle("hidden")
})
