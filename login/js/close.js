const boton = document.querySelector('#active-close');
const clase = document.querySelector('#mobile-menu');
const ope = document.querySelector('#desactive-close');

boton.addEventListener('click', () => {
    clase.style.display = "none";
    boton.style.display = "none";
    ope.style.display = "block";
});

ope.addEventListener('click', () => {
    clase.style.display = "block";
    boton.style.display = "block";
    ope.style.display = "none";
})
