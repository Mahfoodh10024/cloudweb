
let open = document.getElementById('search');
let close = document.querySelector(".close");
let search_box = document.querySelector(".input");
search_box.style.display= "none";

open.onclick = function (){
    search_box.classList.add("open");
    close.style.display= "block";
    search_box.style.display= "block";

}

close.onclick = function (){
    close.style.display= "none";
    search_box.classList.add("close-it");
    search_box.classList.remove("open");
    search_box.style.display = "none";
}

// ..................--------------------------------
// document.querySelector("span").onclick = function(){
//     let search = document.getElementById('search1');
//     search.style.opacity ="70%";
//     search.style.zIndex = "1";
//     search.style.width = "200px";
//     search.style.color = "#F93F04";
// }

// document.getElementById('item1').onmouseover = function(){
//     let vv = document.getElementById('item1');
//     vv.style.opacity = "50%";
// }


// ----------------------------------------------------------------

