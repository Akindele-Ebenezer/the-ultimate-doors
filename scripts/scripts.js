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

const navUl = document.querySelector('.nav-toggle ul');
const navUlChildren = navUl.children; 

for (let i = 0; i < navUlChildren.length; i++) {
    navUlChildren[i].style.cursor = 'pointer';
     
    navUlChildren[i].addEventListener('click', () => { 

        navToggle.style.transform = 'translateY(-100%)';
        navIcon.classList.toggle('display');
        navSmScreenNavIcon.classList.toggle('display');
    
        let navUlChildrenAttributes = navUlChildren[i].textContent.toLowerCase();
        let navUlChildrenAnchorTags = navUlChildren[i].children; 

        for (let i = 0; i < navUlChildrenAnchorTags.length; i++) {

            if(navUlChildrenAttributes === 'home') { 
                navUlChildrenAnchorTags[i].setAttribute('href', 'https://ultimatedoorsncabinets.com/#'); 
                break;
            }

            navUlChildrenAnchorTags[i].setAttribute('href', 'https://ultimatedoorsncabinets.com/#' + navUlChildrenAttributes); 
        } 
    });  

}   

