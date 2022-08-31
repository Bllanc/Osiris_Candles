let slideIndex = 0;
showSlides();

function showSlides() {
  let slides = document.getElementsByClassName("mySlides"); // Mise de l'élément en variable 
  for (i = 0; i < slides.length; i++) { // Pour  i = 0, tant que i est inf à la longueur des slides
    slides[i].style.display = "none"; // alors on affiche rien
  }
  slideIndex++; // Incrémentation du nombre de Slide
  if (slideIndex > slides.length) {slideIndex = 1}  // Si slideIndex et sup à la longueur des slides , slideIndex=1
  slides[slideIndex-1].style.display = "block"; // Alors on fait appaitre 
  setTimeout(showSlides, 8000); // Change l'image toutes les 8 secondes
}