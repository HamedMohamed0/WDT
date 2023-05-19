let clicked = document.querySelector(".burger-icon");
let list = document.querySelector("header .list");
clicked.addEventListener("click", () => {
  clicked.classList.toggle("clicked");
  list.classList.toggle("show");
});
let date = `${new Date().getUTCMonth()+1}/${new Date().getDate()}/${new Date().getFullYear()}`

let input = document.querySelector("form .input");
let add = document.querySelector("form .add");
let form = document.querySelector("form");
let tasks = document.querySelector(".tasks");
let array;
let retarray;
if (localStorage.getItem("Tasks")) {
  let retTasks = localStorage.getItem("Tasks");
  retarray = JSON.parse(retTasks);
  array = retarray;
  for (let i = 0; i < retarray.length; i++) {
    if (retarray[i] !== "") {
      let task = document.createElement("div");
      let text = document.createElement("div")
      let emoji = document.createElement("img")
      let p = document.createElement("p");
      let btns = document.createElement("div")
      let btn = document.createElement("div");
      let btnIcon = document.createElement("i")
      let btn2 = document.createElement("div")
      let btnIcon2 = document.createElement("i")
      let info = document.createElement("div")
      let taskDate = document.createElement("div")
      let time = document.createElement("p")
      let timeImg = document.createElement("img")
      timeImg.src = "image/hourglass-done_231b.png"
      time.textContent = `Start: ${date}`
      taskDate.className = "date"
      info.className = "info"
      task.className = "task";
      text.className = "text"
      p.textContent = retarray[i];
      btnIcon.className = "fa-solid fa-check edit-1";
      btnIcon2.className ="fa-solid fa-xmark fa-shake edit-2";
      btns.className="icons"
      emoji.src ="image/pensive-face_1f614.png"
      text.appendChild(p);
      text.appendChild(emoji)
      info.appendChild(text)
      info.appendChild(btns);
      task.appendChild(info)
      taskDate.appendChild(time)
      taskDate.appendChild(timeImg)
      task.appendChild(taskDate)
      btns.appendChild(btn)
      btn.appendChild(btnIcon)
      btns.appendChild(btn2)
      btn2.appendChild(btnIcon2)
      tasks.appendChild(task);
      if(localStorage.getItem(retarray[i])){
        task.classList.add("active")
        emoji.src ="image/smiling-face-with-smiling-eyes_1f60a.png"
      }
      btn2.onclick = function () {
        task.style.display = "none";
        localStorage.removeItem(p.innerHTML)
        let newa = array.filter((e) => e !== p.textContent);
        array = newa;
        let storedTasks = JSON.stringify(array);
        localStorage.setItem("Tasks", storedTasks);
        retTasks = localStorage.getItem("Tasks");
        retarray = JSON.parse(retTasks);
      };
      btn.onclick = function (){
        localStorage.setItem(p.innerHTML,"active")
        task.classList.add("active")
        if (emoji.getAttribute("src") === "image/pensive-face_1f614.png"){
          emoji.src = "image/smiling-face-with-smiling-eyes_1f60a.png"
        }
      }
    }
  }
} else {
  array = [];
}
add.onclick = function () {
  if (input.value !== "") {
    array.push(input.value);
    let storedTasks = JSON.stringify(array);
    localStorage.setItem("Tasks", storedTasks);
    let retTasks = localStorage.getItem("Tasks");
    retarray = JSON.parse(retTasks);
    let task = document.createElement("div");
    let text = document.createElement("div")
    let emoji = document.createElement("img")
    let p = document.createElement("p");
    let btns = document.createElement("div")
    let btn = document.createElement("div");
    let btnIcon = document.createElement("i")
    let btn2 = document.createElement("div")
    let btnIcon2 = document.createElement("i")
    let info = document.createElement("div")
    let taskDate = document.createElement("div")
    let time = document.createElement("p")
    let timeImg = document.createElement("img")
    timeImg.src = "image/hourglass-done_231b.png"
    time.textContent = `Start: ${date}`
    taskDate.className = "date"
    task.className = "task";
    text.className = "text"
    info.className = "info"
    p.textContent = input.value;
    btnIcon.className = "fa-solid fa-check edit-1";
    btnIcon2.className ="fa-solid fa-xmark fa-shake edit-2";
    btns.className="icons"
    emoji.src ="image/pensive-face_1f614.png"
    text.appendChild(p);
    text.appendChild(emoji)
    info.appendChild(text)
    info.appendChild(btns);
    task.appendChild(info)
    taskDate.appendChild(time)
    taskDate.appendChild(timeImg)
    task.appendChild(taskDate)
    btns.appendChild(btn)
    btn.appendChild(btnIcon)
    btns.appendChild(btn2)
    btn2.appendChild(btnIcon2)
    tasks.appendChild(task);
    btn2.onclick = function () {
      task.style.display = "none";
      localStorage.removeItem(p.innerHTML)
      let newa = array.filter((e) => e !== p.textContent);
      array = newa;
      let storedTasks = JSON.stringify(array);
      localStorage.setItem("Tasks", storedTasks);
      retTasks = localStorage.getItem("Tasks");
      retarray = JSON.parse(retTasks);
      console.log(array);
    };
    btn.onclick = function (){
      localStorage.setItem(p.innerHTML,"active")
      task.classList.add("active")
      if (emoji.getAttribute("src") === "image/pensive-face_1f614.png"){
        emoji.src = "image/smiling-face-with-smiling-eyes_1f60a.png"
      }
    }
    input.blur();
    input.value = "";
  }
};
console.log(tasks);
form.onsubmit = function (e) {
  e.preventDefault();
};


console.log(date)