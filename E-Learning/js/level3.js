let lis = document.querySelectorAll(".lessions-numbers ul li")
let fram = document.querySelector (".lessions-videos .video iframe")
let h2 = document.querySelector (".lessions-videos .info h2")
let span = document.querySelector (".lessions-videos .info span")


window.onload = function () {
    localStorage.setItem(`levelthreevideo${0}`,lis[0].innerHTML)
}


lis.forEach (function(ele,index) {
    if(ele.innerHTML===localStorage.getItem(`levelthreevideo${index}`)) {
        ele.classList.add("active")
    }
})
lis.forEach(function (ele,index){
    ele.onclick = function () {
        ele.classList.add("active")
        localStorage.setItem(`levelthreevideo${index}`,ele.innerHTML)
    }
})


lis[0].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/NFqjO5z1jx0?list=PLuXY3ddo_8nzCVqXcTFqwcM5R0gZiMRiW"
    h2.innerHTML ="<span>1.</span> Build a Snake game with Python"
})
lis[1].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/taL3r_JpwBg?list=PLuXY3ddo_8nzCVqXcTFqwcM5R0gZiMRiW"
    h2.innerHTML ="<span>2.</span> Web Scraping with Python Beautiful Soup"
})
lis[2].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/OlZoEMdM530?list=PLuXY3ddo_8nzCVqXcTFqwcM5R0gZiMRiW"
    h2.innerHTML ="<span>3.</span> strong password generator"
})
lis[3].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/q0ert5YP968?list=PLuXY3ddo_8nzCVqXcTFqwcM5R0gZiMRiW"
    h2.innerHTML ="<span>4.</span> Web Scraping with Python Beautiful Soup"
})
lis[4].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/xzuguCSizWw?list=PLuXY3ddo_8nzCVqXcTFqwcM5R0gZiMRiW"
    h2.innerHTML ="<span>5.</span>Python Pong Game"
})
lis[5].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/Cr-Bo1Nk9zE?list=PLuXY3ddo_8nzCVqXcTFqwcM5R0gZiMRiW"
    h2.innerHTML ="<span>6.</span> Build Python Translator"
})
lis[6].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/BITjlIWiPso?list=PLuXY3ddo_8nzCVqXcTFqwcM5R0gZiMRiW"
    h2.innerHTML ="<span>6.</span> Python Guessing Game"
})

