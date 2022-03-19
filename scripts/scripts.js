const navIcon = document.querySelector('nav div img');
const navSmScreen = document.querySelector('.nav-sm-screen');
const navToggle = document.querySelector('.nav-toggle');
const navToggleImage = document.querySelector('.nav-toggle img');

navIcon.addEventListener('click', () => {
    navToggle.style.transform = 'translateY(0)';
})

navSmScreen.addEventListener('click', () => {
    navToggle.style.transform = 'translateY(0)';
})

navToggleImage.addEventListener('click', () => {
    navToggle.style.transform = 'translateY(-100%)';
})
console.log(navIcon);