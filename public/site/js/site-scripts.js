document.addEventListener('DOMContentLoaded', () => {
    const timeDelay = 1500;
    let preloader = document.getElementById('preloader');
    let body = document.getElementsByTagName('body')[0];
  
    body.style.overflowY = 'hidden';
    preloader.scrollIntoView();

    setTimeout(function() {
        preloader.classList.add('preloader--hide');
        body.style.overflowY = 'scroll';
    }, timeDelay);
});