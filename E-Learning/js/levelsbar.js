let prog = document.querySelectorAll(".prog")
let spanprog = document.querySelectorAll(".prog span")
let counter = 0;
let counterTwo = 0;
let counterThree = 0;

for (let i = 0 ; i < localStorage.length;i++){
    if(localStorage.getItem(`levelonevideo${i}`)){
        counter += 100/44;
    }
    if(localStorage.getItem(`leveltwovideo${i}`)){
        counterTwo += 100/6;
    }
    if(localStorage.getItem(`levelthreevideo${i}`)){
        counterThree += 100/7;
    }
}
prog[0].style.background =`radial-gradient(closest-side, #202020 80%, transparent 82% 100%),
conic-gradient(var(--second-color-light) ${counter}%, #383838 0)`
prog[1].style.background =`radial-gradient(closest-side, #202020 80%, transparent 82% 100%),
conic-gradient(var(--second-color-light) ${counterTwo}%, #383838 0)`
prog[2].style.background =`radial-gradient(closest-side, #202020 80%, transparent 82% 100%),
conic-gradient(var(--second-color-light) ${counterThree}%, #383838 0)`

spanprog[0].innerHTML=`${Math.floor(counter)}%`
spanprog[1].innerHTML=`${Math.floor(counterTwo)}%`
spanprog[2].innerHTML=`${Math.floor(counterThree)}%`