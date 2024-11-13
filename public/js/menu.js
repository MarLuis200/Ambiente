
    document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll(".carousel-slide");
    let currentSlide = 0;

    function showNextSlide() {
    slides[currentSlide].classList.add("opacity-0"); // Hide current slide
    currentSlide = (currentSlide + 1) % slides.length; // Move to the next slide
    slides[currentSlide].classList.remove("opacity-0"); // Show next slide
}

    // Change slide every 5 seconds
    setInterval(showNextSlide, 5000);
});
