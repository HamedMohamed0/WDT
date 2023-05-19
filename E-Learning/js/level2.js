let lis = document.querySelectorAll(".lessions-numbers ul li")
let fram = document.querySelector (".lessions-videos .video iframe")
let h2 = document.querySelector (".lessions-videos .info h2")
let span = document.querySelector (".lessions-videos .info span")


window.onload = function () {
    localStorage.setItem(`leveltwovideo${0}`,lis[0].innerHTML)
}



lis.forEach (function(ele,index) {
    if(ele.innerHTML===localStorage.getItem(`leveltwovideo${index}`)) {
        ele.classList.add("active")
    }
})
lis.forEach(function (ele,index){
    ele.onclick = function () {
        ele.classList.add("active")
        localStorage.setItem(`leveltwovideo${index}`,ele.innerHTML)
    }
})

lis[0].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/fK2lLVqc8UY?list=PLuXY3ddo_8nzUrgCyaX_WEIJljx_We-c1"
    h2.innerHTML ="<span>1.</span> Introduction to Object Oriented Programming - OOP {1/4}"
})
lis[1].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/qP9-3LnMZsE?list=PLuXY3ddo_8nzUrgCyaX_WEIJljx_We-c1"
    h2.innerHTML ="<span>2.</span> Encapsulation - OOP {2/4}"
})
lis[2].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/dW4WhJZB99U?list=PLuXY3ddo_8nzUrgCyaX_WEIJljx_We-c1"
    h2.innerHTML ="<span>3.</span> Abstraction - OOP {3/4}"
})
lis[3].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/1XE_cfonjXU?list=PLuXY3ddo_8nzUrgCyaX_WEIJljx_We-c1"
    h2.innerHTML ="<span>4.</span> Inheritance & Polymorphism - OOP {4/4}"
})
lis[4].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/A9kSngn7254?list=PLuXY3ddo_8nzUrgCyaX_WEIJljx_We-c1"
    h2.innerHTML ="<span>5.</span>Python Object Oriented Programming"
})
lis[5].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/8BCN8gXbBY8?list=PLuXY3ddo_8nzUrgCyaX_WEIJljx_We-c1"
    h2.innerHTML ="<span>6.</span> Python Special/Dunder Methods"
})

