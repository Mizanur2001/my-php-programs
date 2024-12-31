/* ####################################################################
        For Image slider in home page
    ################################################################### */
const slider = document.querySelector('.slider');
const images = document.querySelectorAll('.slide-image');

let slideNumber = 1;
const length = images.length;

const nextSlide = () => {
    slider.style.transform = `translateX(-${slideNumber * 100}vw)`;
    slideNumber++;
};

const prevSlide = () => {
    slider.style.transform = `translateX(-${(slideNumber - 2) * 100}vw)`;
    slideNumber--;
};

const getFirstSlide = () => {
    slider.style.transform = `translateX(0px)`;
    slideNumber = 1;
};

const getLastSlide = () => {
    slider.style.transform = `translateX(-${(length - 1) * 100}vw)`;
    slideNumber++;
};

const bottom = document.querySelector('.bottom');
for (let i = 0; i < length; i++) {
    const div = document.createElement('div');
    div.className = 'button';
    bottom.appendChild(div);
};

const buttons = document.querySelectorAll('.button');
buttons[0].style.backgroundColor = '#FFE6F4';

// Function to set the background color of buttons as transparent  
const resetBg = () => {
    buttons.forEach((button) => {
        button.style.backgroundColor = 'transparent';
        // stop slide and start slide function call
        // button.addEventListener('mouseover', stopSlideShow);
        // button.addEventListener('mouseout', startSlideShow);
    });
};

buttons.forEach((button, i) => {
    button.addEventListener('click', () => {
        resetBg();
        slider.style.transform = `translateX(-${i * 100}vw)`;
        button.style.backgroundColor = '#FFE6F4';
    });
});

// Function to change the color
const changeColor = () => {
    resetBg();
    buttons[slideNumber - 1].style.backgroundColor = '#FFE6F4';
};
// Function to make the slider auto-play
let slideInterval;

const startSlideShow = () => {
    slideInterval = setInterval(() => {
        slideNumber < length ? nextSlide() : getFirstSlide();
        changeColor();
    }, 2500);
};
startSlideShow();


// Stop slideshow when mouse on the image
const stopSlideShow = () => {
    clearInterval(slideInterval)
};

// slider.addEventListener('mouseover', stopSlideShow);
// slider.addEventListener('mouseout', startSlideShow);



/*  #############################################################
    Javascript for Customer Review
    #############################################################  */

    const right_arrow = document.querySelector('.next');
    const card = document.querySelector('.reviewSection');
    const review_card = document.querySelectorAll('.reviewItem');
    // console.log(review_card);
    // console.log(card);

    let counter = 1;
    right_arrow.addEventListener('click', () => {
        if (counter < 3) {
            card.style.transform = `translateX(-${counter * 405}px)`;
            counter++;
            // console.log("hello jaiswal");
        }
        else {
            card.style.transform = `translateX(0px)`;
            counter = 1;
        }

    });


/* ####################################################
   JavaScript for all services section
   #################################################### */

const right_click = document.querySelector('.arrow');
// console.log(right_click);
const service_cardAll = document.querySelector('.allServiceCard');
const service_card = document.querySelectorAll('.serviceCard');
// console.log(service_cardAll);
// console.log(service_card);


let service_counter = 1;
right_click.addEventListener('click', () => {
    if (service_counter < 2) {
        service_cardAll.style.transform = `translateX(-${service_counter * 925}px)`;
        service_counter++;
        // console.log("hello jaiswal");
    }
    else {
        service_cardAll.style.transform = `translateX(0px)`;
        service_counter = 1;
    }

});

const points = document.querySelector('.points');
for (let i = 0; i < 2; i++) {
    const div = document.createElement('div');
    div.className = 'point';
    points.appendChild(div);
};

const allPoints = document.querySelectorAll('.point');
allPoints[0].style.backgroundColor = '#FFE6F4';

const resetPointAsTransparent = () => {
    allPoints.forEach((point) => {
        point.style.backgroundColor = 'transparent';
    });
};

let pointCount=0;
right_click.addEventListener('click', () => {
    pointCount += 1;
    if(pointCount==1){
    resetPointAsTransparent();
    allPoints[1].style.backgroundColor = '#FFE6F4';
    }
    else if(pointCount==2){
        resetPointAsTransparent();
        allPoints[0].style.backgroundColor = '#FFE6F4';
        pointCount=0;
    }
});


/* ################################
      Media query
   ################################ */
  