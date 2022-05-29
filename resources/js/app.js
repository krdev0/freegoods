//TODO: include only in show page

require('fslightbox');



//TODO: include on index page
import Splide from '@splidejs/splide';

let elms = document.getElementsByClassName('splide');

for (let i = 0; i < elms.length; i++) {
    new Splide(elms[i], {
        perPage: 1,
        arrows: true,
        classes: {
            prev: 'splide__arrow--prev bg-white',
            next: 'splide__arrow--next bg-white',
            page: 'splide__pagination__page bg-white',
        }
    }).mount();
}