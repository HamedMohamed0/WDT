let lis = document.querySelectorAll(".lessions-numbers ul li")
let fram = document.querySelector (".lessions-videos .video iframe")
let h2 = document.querySelector (".lessions-videos .info h2")
let span = document.querySelector (".lessions-videos .info span")





window.onload = function () {
    localStorage.setItem(`levelonevideo${0}`,lis[0].innerHTML)
}


lis.forEach (function(ele,index) {
    if(ele.innerHTML===localStorage.getItem(`levelonevideo${index}`)) {
        ele.classList.add("active")
    }
})
lis.forEach(function (ele,index){
    ele.onclick = function () {
        ele.classList.add("active")
        localStorage.setItem(`levelonevideo${index}`,ele.innerHTML)
    }
})




lis[0].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/h3VCQjyaLws?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>1.</span> The importance of learning programming with Python"
})
lis[1].addEventListener("click", function() {
    fram.src = "https://www.youtube.com/embed/t-bCLbmgesI?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>2.</span> Introduction to the Python course"
})
lis[2].addEventListener("click", function() {
    fram.src = "https://www.youtube.com/embed/WTRKeSoynKI?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>3.</span> InstallPython"
})
lis[3].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/SMyzYOPGeD8?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>4.</span> Install PyCharm"
})
lis[4].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/oMMW_Cx0qW8?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>5.</span> Write the first line of code in Python"
})
lis[5].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/Vl1mHJMrEnk?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>6.</span> Build your first program in Python"
})
lis[6].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/gQxch0k9B0E?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>7.</span> Python Variables"
})
lis[7].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/5O_m0IGwQLw?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>8.</span> Python Strings"
})
lis[8].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/HjfiVp0L3LI?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>9.</span> Python Numbers"
})
lis[9].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/bWE45B_O9Lk?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>10.</span> Python Inputs"
})
lis[10].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/hYC0ObXfGjs?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>11.</span> Build Calculator in Python"
})
lis[11].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/N57Xvo8ilMw?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>12.</span> Build MadLibs in Python"
})
lis[12].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/EgwCjNCx_v4?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>13.</span> Python Lists"
})
lis[13].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/SGp9syExKxk?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>14.</span>  Python Lists 2"
})
lis[14].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/PNMSop-0kwM?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>15.</span> Python Tuples" 
})
lis[15].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/b4AEoHvCD_A?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>16.</span> Python Functions"
})
lis[16].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/HjiAlW4fbRw?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>17.</span> Python Functions 2"
})
lis[17].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/IT1C46MDoxo?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>18.</span> Python Conditionals"
})
lis[18].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/WCN4GDOZitU?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>19.</span> Python Comparisons"
})
lis[19].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/Vj8zWPW5kKg?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>20.</span> Build Calculator in Python 2"
})
lis[20].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/mQ4AkeafCds?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>21.</span> Python Dictionaries"
})
lis[21].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/TXQSACBnvZ0?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>22.</span> Python While Loop"
})
lis[22].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/NFqjO5z1jx0?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>23.</span> Build a Snake game with Python"
})
lis[23].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/kXKcuqISXYo?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>24.</span> Python For Loop"
})
lis[24].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/kp-LJqgJPmI?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>25.</span> Python Sets"
})
lis[25].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/muBnHp9JufE?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>26.</span> Python Power()"
})
lis[26].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/BXsVpjWKr2Q?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>27.</span> Python 2D Lists & Nested Loops"
})
lis[27].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/_5z9fX2vfDs?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>28.</span>  Python Comments"
})
lis[28].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/jevAO7QlkQQ?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>29.</span> Python Errors"
})
lis[29].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/ZCmdm-RuRFA?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>30.</span> Python Reading Files"
})
lis[30].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/fVgRlbFAoeU?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>31.</span> Python Writing Files"
})
lis[31].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/Qj58RxZPw7c?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>32.</span> Python Modules"
})
lis[32].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/cqopVpEWvCc?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>33.</span> Python Classes & Objects"
})
lis[33].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/ZaQgQN2HTGY?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>34.</span> Python Class Functions"
})
lis[34].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/93_JLg55jGM?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>35.</span> Python Class Inheritance"
})
lis[35].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/xzuguCSizWw?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>36.</span> Python Pong Game"
})
lis[36].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/A9kSngn7254?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>37.</span> Python Object Oriented Programming"
})
lis[37].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/8BCN8gXbBY8?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>38.</span> Python Special/Dunder Methods"
})
lis[38].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/q0ert5YP968?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>39.</span> Web Scraping with Python Beautiful Soup"
})
lis[39].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/OM0qcZRIfSg?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>40.</span> How to Convert a Python File to .EXE"
})
lis[40].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/qXpjgykUxgM?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>41.</span> Python *args"
})
lis[41].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/PhnPgml7O30?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>42.</span> Python **kwargs"
})
lis[42].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/QLJn3fFsy1k?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>43.</span> Python unpacking operators"
})
lis[43].addEventListener("click", function() {
    fram.src="https://www.youtube.com/embed/taL3r_JpwBg?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
    h2.innerHTML ="<span>44.</span> Web Scraping with Python Beautiful Soup"
})

