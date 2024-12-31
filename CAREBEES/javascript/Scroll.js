let line = document.getElementsByClassName("line")[0]
let bookDateSec = document.getElementsByClassName("book-a-date")[0]

bookDateSec.setAttribute("style", `height:${line.offsetWidth}px`)
// setInterval(()=>{
// },1000)


document.addEventListener("scroll", () => {
    let elementTop = bookDateSec.getBoundingClientRect().top;
    if (elementTop < 0) {
        console.log("small");

    }
})




