//mobile-nav-button

const mobileNavButton = document.getElementById('mobile-nav');
const navMenu = document.getElementById('nav-menu');

mobileNavButton.addEventListener('click', function () {
    mobileNavButton.classList.toggle('mobile-nav-button-active');
    navMenu.classList.toggle('hidden');
});

// navbar
window.onscroll = function () {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
}
