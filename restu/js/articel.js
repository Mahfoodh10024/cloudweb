let par = document.getElementById('par');
let button = document.getElementById('btn');

par.classList.add("hide");
btn.innerHTML = "Read More";

button.onclick = function(){
    par.classList.remove("hide");
    par.classList.add("show");
    button.style.marginTop =" 450px";



    if("show"){
        btn.innerHTML = "Read Less"
        button.onclick = function(){
                par.classList.remove("show");
                par.classList.add("hide");
                btn.innerHTML = "Read Less";
                button.style.marginTop ="180px";
        }
    }
};



