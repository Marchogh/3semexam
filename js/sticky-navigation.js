//eksemplet er hentet fra https://www.w3schools.com/howto/howto_js_navbar_sticky.asp 

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("header__nav");
var sticky = navbar.offsetTop;

function myFunction() {
    if(window.pageYOffset >= sticky){
        navbar.classList.add("sticky")
    }
    else{
        navbar.classList.remove("sticky");
    }
}