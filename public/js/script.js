// BACKEND
window.onload = function(){
    // Menú lateral animación
    let leftMenu = document.querySelector('.leftmenutrigger');
    let sideNav = document.querySelector('.side-nav')

    leftMenu.onclick = function(){
        sideNav.classList.toggle('open');
    };
};
