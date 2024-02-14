// let lgn = document.getElementById('lgn');
// let closel = document.getElementById('sub');

// lgn.addEventListener("click", () => {
//     window.open("Login.html" , "_self" , "width = 500px , height = 500px ")
// });

// close1.addEventListener("close" , () =>{
//     window.close();
// });

// let chk = document.getElementById("sub");

// chk.onclick = function (){
//     chk.classList.add ("pop");
// }


let list = document.querySelectorAll(".nav a");

list.array.forEach(a => {
    
    a.addEventListener('click' , (e) =>{
    let over = document.createElement("div");

    over.classList.add("pop");

    document.body.appendChild(over);
    });

});


