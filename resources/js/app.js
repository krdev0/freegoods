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

//TODO: only on create item page

function previewImages() {

    const preview = document.querySelector('#preview');

    if (this.files) {
        [].forEach.call(this.files, readAndPreview);
    }

    function readAndPreview(file) {

        if (!/\.(jpe?g|png)$/i.test(file.name)) {
            return alert(file.name + " is not an image");
        }

        const reader = new FileReader();

        reader.addEventListener("load", function () {
            const image = new Image();
            image.width = 120;
            image.title = file.name;
            image.src = this.result;
            image.classList.add("object-cover", "h-[120px]", "rounded-xl");
            preview.classList.add("mt-4");
            preview.appendChild(image);
        });

        reader.readAsDataURL(file);

    }

}

// document.querySelector('#file-input').addEventListener("change", previewImages);