const closeBtn = document.getElementById('close');
const modalMenu = document.getElementById('modal');
const modalBtn = document.querySelector('.modal__button');
const printBtn = document.getElementById('print-btn');

setTimeout(() => {
    modalMenu.classList.add('show');
}, 500);

closeBtn.addEventListener('click', () => { modalMenu.classList.remove('show') })
modalBtn.addEventListener('click', () => { modalMenu.classList.remove('show') })

function viewOther(){
    const modalMenu = document.getElementById('modal');
    modalMenu.classList.add('show');
}

function printPage(){
    printBtn.style.display = "none";
    window.print();
}