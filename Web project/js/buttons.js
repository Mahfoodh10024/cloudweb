let p = document.getElementById('des');
var btn = document.querySelector(".r")

p.classList.add("close");

btn.onclick = function (){
if("close"){
    p.classList.remove("close");
    p.classList.add("open-it");
}
if("open-it"){
    btn.onclick = function (){
        p.classList.remove("open-it");
        p.classList.add("close");
    }
}}

// --------------------------------------------------

let p1 = document.getElementById('des1');
var btn1 = document.querySelector(".r1")

p1.classList.add("close");

btn1.onclick = function (){
if("close"){
    p1.classList.remove("close");
    p1.classList.add("open-it");
}
if("open-it"){
    btn1.onclick = function (){
        p1.classList.remove("open-it");
        p1.classList.add("close");
    }
}}

// --------------------------------------------------

let p2 = document.getElementById('des2');
var btn2 = document.querySelector(".r2")

p2.classList.add("close");

btn2.onclick = function (){
if("close"){
    p2.classList.remove("close");
    p2.classList.add("open-it");
}
if("open-it"){
    btn2.onclick = function (){
        p2.classList.remove("open-it");
        p2.classList.add("close");
    }
}}

// --------------------------------------------------

let p3 = document.getElementById('des3');
var btn3 = document.querySelector(".r3")

p3.classList.add("close");

btn3.onclick = function (){
if("close"){
    p3.classList.remove("close");
    p3.classList.add("open-it");
}
if("open-it"){
    btn3.onclick = function (){
        p3.classList.remove("open-it");
        p3.classList.add("close");
    }
}}

// --------------------------------------------------

let p4 = document.getElementById('des4');
var btn4 = document.querySelector(".r4")

p4.classList.add("close");

btn4.onclick = function (){
if("close"){
    p4.classList.remove("close");
    p4.classList.add("open-it");
}
if("open-it"){
    btn4.onclick = function (){
        p4.classList.remove("open-it");
        p4.classList.add("close");
    }
}}

// --------------------------------------------------

let p5 = document.getElementById('des5');
var btn5 = document.querySelector(".r5")

p5.classList.add("close");

btn5.onclick = function (){
if("close"){
    p5.classList.remove("close");
    p5.classList.add("open-it");
}
if("open-it"){
    btn5.onclick = function (){
        p5.classList.remove("open-it");
        p5.classList.add("close");
    }
}}