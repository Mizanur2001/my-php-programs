console.log("Welcome to Bhabta Azizia High Madrasah Console")
console.log("Made in India with ❤️")

let slideIndex = 0;
carousel();

function carousel() {
    let i;
    let x = document.getElementsByClassName("slide");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {
        slideIndex = 1
    }
    x[slideIndex - 1].style.display = "block";
    setTimeout(carousel, 5000); // Change image every 5 seconds
}