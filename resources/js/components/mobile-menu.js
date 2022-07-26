export default function(){
    const burger = document.querySelector('.hamburger'),
        mobileMenu = document.querySelector('.nav');

    burger.addEventListener('click', function(){
        document.documentElement.classList.toggle('show-nav');
    });
}
