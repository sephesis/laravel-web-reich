document.addEventListener('DOMContentLoaded', () => {
    const mediaFiles = document.querySelectorAll('img');
    let preloader = document.getElementById('preloader');
    let body = document.getElementsByTagName('body')[0];
    let i = 0
    
    body.style.overflowY = 'hidden';
    Array.from(mediaFiles).forEach((file, index) => {
        file.onload = () => {
            i++

            console.log(i);
            console.log(mediaFiles.length);
            if(i === mediaFiles.length) {
                preloader.classList.add('preloader--hide');
                body.style.overflowY = 'scroll';
            }
        }
    })

})
