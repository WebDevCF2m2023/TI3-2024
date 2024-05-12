const navbarToggler = document.querySelector(".navbar-toggler");
const navUl = document.querySelector("nav > ul");
let collapse = false;

function toggleNavbar(){
    if(document.body.scrollWidth >= 992){
        navbarToggler.style.display = "none";
        navUl.style.maxHeight = "";
        collapse = false;
        navUl.classList.remove("collapse");
    }else{
        navbarToggler.style.display = "";
        navUl.classList.add("collapse");
    }
}

function collapsing(){
    navUl.style.maxHeight = collapse ? "0px" : navUl.scrollHeight + "px";
    collapse = !collapse;
}

toggleNavbar();
addEventListener("resize", toggleNavbar);