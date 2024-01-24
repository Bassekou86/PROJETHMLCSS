let myCarousel = document.getElementById('myCarousel');
let myCarouselImages = document.getElementsByClassName('myCarouselImages');
let myImageVisible = 0;
// cette fonction affiche l'image suivante, et cache la précédente
function changerImage() {
    myCarouselImages[myImageVisible].classList.remove('visible');
    myImageVisible = (myImageVisible + 1) % myCarouselImages.length;
    myCarouselImages[myImageVisible].classList.add('visible');
}
document.getElementById('nextPicture').onclick = changerImage;
changerImage();
setTimeout (changerImage, 100);