
let show = document.querySelector(".show-it");
let password = document.querySelector(".in6");

show.onclick = function (){
    if(password.type =='password'){
        password.setAttribute('type' , 'text');
        show.classList.add('hide');
    }
    else{
        password.setAttribute('type' , 'password');
        show.classList.add('show');
        show.classList.remove('hide');
    }
};

    let chek = document.querySelector(".chk");

    chek.onmouseover = function opa(){
        chek.classList.add ("pop");

        setTimeout(() => {
            chek.classList.remove ("pop");
        }, 3000);

        clearTimeout;
    }

