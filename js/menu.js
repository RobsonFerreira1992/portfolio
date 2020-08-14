const $header = document.querySelector('header');
const $logo = document.querySelectorAll('.logo')[0];
const $navbar = document.querySelectorAll('.nav-bar')[0];
const $menu = document.querySelectorAll('.menu')[0];


window.addEventListener('scroll',toggleHeader,false);

function toggleHeader(){
    if(window.pageYOffset > 60 && $header.classList.contains('max-header')){
        $header.classList.remove('max-header');
        $header.classList.add('min-header');
        $logo.firstElementChild.setAttribute('src','img/logo.svg');
        $logo.firstElementChild.style.width="90px";
        $logo.classList.remove('max-logo');
        $logo.classList.add('min-logo');
        $navbar.classList.remove('max-nav');
        $navbar.classList.add('min-nav');
        $menu.firstElementChild.classList.remove('max-hamburguer');
        $menu.firstElementChild.classList.add('min-hamburguer');

    }else if (window.pageYOffset <= 60 && $header.classList.contains('min-header')){
        $header.classList.add('max-header');
        $header.classList.remove('min-header');
        $logo.firstElementChild.setAttribute('src','img/logo.svg');
        $logo.firstElementChild.style.width="115px";
        $logo.classList.add('max-logo');
        $logo.classList.remove('min-logo');
        $navbar.classList.add('max-nav');
        $navbar.classList.remove('min-nav');
        $menu.firstElementChild.classList.add('max-hamburguer');
        $menu.firstElementChild.classList.remove('min-hamburguer');
    }
}
 
 $menu.addEventListener('click',toggleMenu,false);
 var inOpen = false;
 function toggleMenu(){
     if(!inOpen){
        $navbar.classList.add('menu-opened');
        $menu.firstElementChild.classList.add('close-btn');
        inOpen = true;
     }else{
        $navbar.classList.remove('menu-opened');
        $menu.firstElementChild.classList.remove('close-btn');
        inOpen = false;

     }
    
 } 

 $navbar.addEventListener('click',navClick,false);

 function navClick(evt){
    if(evt.target.tagName == 'A'){
        toggleMenu();
    }
}
 
 
