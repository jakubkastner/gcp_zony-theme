// My styles
import './sass/main.scss';

// Bootstrap JS
import 'bootstrap';

// Own script
import { elements } from './js/base';
import './js/script';



// Intro - scroll to main content
if (elements.scrollBtn) {
    elements.scrollBtn.addEventListener('click', e => {
        elements.mainContent.scrollIntoView();
    });
}

// Add animation on scroll
const animatedElements = Array.from(elements.animate);

document.addEventListener('scroll', () => {
    
    animatedElements.forEach(e => {
        const alreadyAnimated = e.classList.contains('animated');

        if (!alreadyAnimated) {
            const bottomScreen = window.pageYOffset + window.innerHeight;
            const elementIsVisible = bottomScreen > e.getBoundingClientRect().top + window.pageYOffset; //e.offsetTop zafunguje na praent elelemtn proto getBoundi...
            
            if (elementIsVisible) {
                e.style.animationName = e.dataset.animation;
                e.style.animationDuration = e.dataset.duration;
                e.style.animationDelay = e.dataset.delay;
                e.style.animationFillMode = 'backwards';
                e.classList.add('animated');
            }
        }
        
    });
});

// Show loader on submit login form and dotaznik
const showLoader = (show) => {
    const loader = document.querySelector('.loader');
    (show === 'hide') ? loader.classList.remove('loader--active') : loader.classList.add('loader--active');
}

if (elements.loginForm) {
    elements.loginForm.addEventListener('submit', () => {
        showLoader();
    });
}

if (elements.dotaznikForm) {
    elements.dotaznikForm.addEventListener('submit', () => {
        showLoader();
    });
}


// Page loader
document.onreadystatechange = function() { 
    if (document.readyState !== "complete") { 
        document.querySelector("body").style.visibility = "hidden"; 
        showLoader();
    } else { 
        showLoader('hide');
        document.querySelector("body").style.visibility = "visible"; 
    } 
};