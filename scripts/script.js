var menu = document.getElementById("menu");
var hamburger = document.getElementById("hamburger");
var menuHelper = document.getElementById("menu-helper");
var menuClose = document.getElementById("menu-close");
var navbar = document.getElementById("nav");

hamburger.addEventListener("click",function(){
    navbar.classList.toggle("active");
    menu.classList.toggle("active");
    menuHelper.classList.toggle("active");
    menuClose.classList.toggle("active");
});

menuClose.addEventListener("click",function(){
    navbar.classList.toggle("active");
    menu.classList.toggle("active");
    menuHelper.classList.toggle("active");
    menuClose.classList.toggle("active");
});



//intersection observer start

var bragDiv = document.querySelectorAll(".brag-div-content");
var bragDivTwo = document.querySelectorAll(".brag-div-two");

const observer = new IntersectionObserver(entries=>{
    entries.forEach(entry=>{
        if(entry.isIntersecting){
            entry.target.classList.add("active");
        }
        else{
            entry.target.classList.remove("active");
        }
    });
});

bragDiv.forEach(brag=>{
    observer.observe(brag);
});

bragDivTwo.forEach(brag=>{
    observer.observe(brag);
});
