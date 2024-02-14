var counter = 1;
setInterval(function(){
document.getElementById('radio'  + counter).checked = true;
counter++;
if(counter > 3){
    counter = 1;
}
}, 
6000);


let up = document.querySelector(".up");

window.onscroll = function (){
    if(window.scrollY <= 700){
        up.classList.add("s");
    }
    else{
    up.classList.remove("s");
    }
}