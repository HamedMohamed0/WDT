let clicked = document.querySelector(".burger-icon");
let list = document.querySelector("header .list");
clicked.addEventListener("click", () => {
  clicked.classList.toggle("clicked");
  list.classList.toggle("show");
});

let up = document.querySelector(".top");

window.onscroll = function () {
  if (scrollY >= 900) {
    up.style.display = "block";
  } else {
    up.style.display = "none";
  }
};
up.onclick = function () {
  window.scrollTo(0, 0);
};


