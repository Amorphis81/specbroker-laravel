import Swiper, { Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';

Swiper.use([Pagination]);

addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('[data-name=swiper-block]', {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
        },
    });

    //Single business
    const thumbsSingleBusiness = new Swiper("[data-name=single-business-swiper-thumbs]", {
        loop: true,
        spaceBetween: 23,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });

    const swiperSingleBusiness = new Swiper("[data-name=single-business-swiper]", {
        loop: true,
        thumbs: {
            swiper: thumbsSingleBusiness,
        },
    });
})
