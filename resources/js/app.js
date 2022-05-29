import Splide from '@splidejs/splide';

// document.addEventListener('DOMContentLoaded', function () {
//     var splide = new Splide('.splide', {
//         perPage: 3,
//         arrows: true,
//         gap: '1em',
//     });
//     splide.mount();
// });

var elms = document.getElementsByClassName('splide');

for (var i = 0; i < elms.length; i++) {
    new Splide(elms[i], {
        perPage: 1,
        arrows: true,
    }).mount();
}