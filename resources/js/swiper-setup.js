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
})
