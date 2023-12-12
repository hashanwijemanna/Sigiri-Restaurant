let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.slide');
    
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }

    const offset = -currentSlide * 100 + '%';
    document.querySelector('.slider').style.transform = 'translateX(' + offset + ')';
}

function changeSlide(n) {
    showSlide(currentSlide + n);
}

function autoSlide() {
    changeSlide(1);
}

// Change slide every 3 seconds (adjust as needed)
setInterval(autoSlide, 4000);

// Initial slide show
showSlide(currentSlide);
