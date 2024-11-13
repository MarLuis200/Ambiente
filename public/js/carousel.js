document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll(".carousel-slide");
    let currentSlide = 0;

    function showNextSlide() {
        slides[currentSlide].classList.add("opacity-0");
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.remove("opacity-0");
    }

    // Change slide every 5 seconds
    setInterval(showNextSlide, 10000);
});
