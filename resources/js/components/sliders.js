import Swiper, { Navigation, Pagination } from 'swiper';
Swiper.use([Navigation, Pagination]);

export default function () {
    // Design sliders
    const designSliders = document.querySelectorAll('.design-slider');
    designSliders.forEach(designSlider => {
        new Swiper(designSlider, {
            direction: "horizontal",
            slidesPerView: 1,
            autoHeight: true,
            speed: 700,
            loop: true,
            navigation: {
                prevEl: '.design-btn-prev',
                nextEl: '.design-btn-next',
            },
            pagination: {
              el: '.swiper-pagination',
              type: 'custom',
              renderCustom: function (swiper, current, total) {
                let next = (current == total) ? 1 : current + 1;
                return `<span class="current">${current}</span>
                        <span class="next">${next}</span>`;
              }
            },
            breakpoints: {
                992: {
                    direction: "vertical",
                }
            },
        })
    });

    // Gallery sliders
    const gallerySliders = document.querySelectorAll('.gallery-slider');
    gallerySliders.forEach(gallerySlider => {
        new Swiper(gallerySlider, {
            direction: "horizontal",
            slidesPerView: 1,
            loop: true,
            navigation: {
                prevEl: '.gallery-btn-prev',
                nextEl: '.gallery-btn-next',
            },
            speed: 700,
            breakpoints: {
                992: {
                    direction: "vertical",
                }
            },
        })
    });
}
