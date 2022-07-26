import Swiper, {Navigation, Pagination} from 'swiper';

export default function () {
    const options = {
        direction: "horizontal",
        slidesPerView: 1,
        autoHeight: true,
        loop: true,
        navigation: {
            nextEl: '.swiper-btn--next',
            prevEl: '.swiper-btn--prev',
        },
        speed: 700,
        breakpoints: {
            992: {
                direction: "vertical",
            }
        },
    };
    const designSlider1 = document.querySelector('.design-slider-1');
    const designSlider2 = document.querySelector('.design-slider-2');

    designSlider1 && new Swiper(designSlider1, options);
    designSlider2 && new Swiper(designSlider2, options);
}
