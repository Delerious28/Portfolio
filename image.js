// Get the image element
var imageElement = document.getElementById("responsiveImage");

// Check the screen width using the media query
if (window.matchMedia("(min-width: 300px) and (max-width: 450px)").matches) {
    // Change the image source
    imageElement.src = "img/b2.2.png";
}