const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show');
});
const homeContent = document.getElementById("homeContent");
const navliks=document.getElementsByClassName("navlinks") 
navLinks.addEventListener("click", function() {
    if (homeContent.style.display === "none") {
        homeContent.style.display = "block";
        navLinks.textContent = "Hide Home";
    } else {
        homeContent.style.display = "none";
        navLinks.textContent = "Show Home";
    }
});
let slideIndex = 1;
    showSlides(slideIndex);

    // Function to handle slide navigation
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Function to display the appropriate slide
    function showSlides(n) {
        let slides = document.getElementsByClassName("img-slide");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
