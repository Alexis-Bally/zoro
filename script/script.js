const rightnav = () => {
    /*prend tous ce qui possède ces noms*/
    var icone = document.querySelector ('.icone');
    var navbar = document.querySelector ('.navbar');
    var navbarli = document.querySelectorAll ('.navbar li');
/*au click il se passe directement ce qui suit*/
    icone.addEventListener('click', ()=>{
        /*le classList.toggle permet de changer l'element active en true si il est false et inversement*/
        navbar.classList.toggle('active');
        navbarli.forEach((navbar, index) =>{
            if(navbar.style.animation){
                navbar.style.animation=''
            }else{
                navbar.style.animation=`navbarfade 0.5s ease forwards ${index / 5 + 0.5}s`;
            }
        });
    });
}

rightnav();

function DarkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}

var topbutton = document.getElementById("topbutton");

    function topFunction() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

const parallax = document.querySelector('header');

window.addEventListener('scroll', () => {
    parallax.style.backgroundPositionY = -window.scrollY / 2 + "px";
})
