import Swiper from 'swiper';
import { Navigation, Scrollbar } from 'swiper/modules';
import 'swiper/css';

document.querySelectorAll('.about-slider').forEach(item => {
    const parent_el = item.closest('.about');
    const slides = item.querySelectorAll('.swiper-slide');

    const minSlides = 7;

    if (slides.length < minSlides) {
        const fragment = document.createDocumentFragment();

        let i = 0;

        while (item.querySelectorAll('.swiper-slide').length + fragment.childNodes.length < minSlides) {
            const clone = slides[i % slides.length].cloneNode(true);
            fragment.appendChild(clone);
            i++;
        }

        item.querySelector('.swiper-wrapper').appendChild(fragment);
    }

    new Swiper(item, {
        modules: [Navigation, Scrollbar],
        slidesPerView: 2.79,
        spaceBetween: 15,
        autoHeight: true,
        navigation: {
            nextEl: parent_el.querySelector('.button-arrow--next'),
            prevEl: parent_el.querySelector('.button-arrow--prev'),
        },
        scrollbar: {
            el: parent_el.querySelector('.swiper-scrollbar'),
            hide: false,
            draggable: true,
        },
        loop: true,
        slidesOffsetBefore: 20,
        slidesOffsetAfter: 20,
        breakpoints: {
            992: {
                slidesPerView: 6,
                spaceBetween: 19,
                slidesOffsetBefore: 0,
                slidesOffsetAfter: 0,
            },
        },
    });
})