addEventListener('DOMContentLoaded', () => {
    const thumbsSlider = new Swiper("[data-name=swiper-thumbs]", {
        loop: true,
        spaceBetween: 23,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });

    const swiper = new Swiper("[data-name=swiper]", {
        loop: true,
        thumbs: {
            swiper: thumbsSlider,
        },
    });

})
