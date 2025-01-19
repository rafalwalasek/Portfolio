const hamburger = document.getElementById('hamburger');
const navBar = document.getElementById('nav-bar');

hamburger.addEventListener('click', () => {
    navBar.classList.toggle('show');
    hamburger.innerHTML = navBar.classList.contains('show') ? '&#10005;' : '&#9776;';
});