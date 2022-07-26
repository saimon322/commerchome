export default function(){
    location.hash && smoothScrollTo(location.hash);

    $('a[href^="#"]').on('click', function(e){
        e.preventDefault();
        document.documentElement.classList.remove('show-nav');
        smoothScrollTo(this.hash);
    });

    function smoothScrollTo(target){
        $(target).length && $('html,body').animate({
            scrollTop: $(target).offset().top
        }, 1000);
    }
}
