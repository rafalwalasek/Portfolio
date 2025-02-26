const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('nav');

hamburger.addEventListener('click', () => {
    nav.classList.toggle('show');
    hamburger.innerHTML = nav.classList.contains('show') ? '&#10005;' : '&#9776;';
});