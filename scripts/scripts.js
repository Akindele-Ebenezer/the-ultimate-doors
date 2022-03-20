const navIcon = document.querySelector('nav div img');
const navSmScreen = document.querySelector('.nav-sm-screen');
const navSmScreenNavIcon = document.querySelector('.nav-sm-screen div img')
const navToggle = document.querySelector('.nav-toggle');
const navToggleImage = document.querySelector('.nav-toggle img');

navIcon.addEventListener('click', () => {
    navToggle.style.transform = 'translateY(0)';
    navIcon.classList.toggle('display');
})

navSmScreen.addEventListener('click', () => {
    navToggle.style.transform = 'translateY(0)';
    navSmScreenNavIcon.classList.toggle('display');
})

navToggleImage.addEventListener('click', () => {
    navToggle.style.transform = 'translateY(-100%)';
    navIcon.classList.remove('display');
    navSmScreenNavIcon.classList.remove('display');
}) 