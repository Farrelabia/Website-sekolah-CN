$(document).ready(function () {
    $(".each-image").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
    });
});

const scrollers = document.querySelectorAll(".scroller");

// If a user hasn't opted in for recuded motion, then we add the animation
if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    addAnimation();
}

function addAnimation() {
    scrollers.forEach((scroller) => {
        // add data-animated="true" to every `.scroller` on the page
        scroller.setAttribute("data-animated", true);

        // Make an array from the elements within `.scroller-inner`
        const scrollerInner = scroller.querySelector(".scroller__inner");
        const scrollerContent = Array.from(scrollerInner.children);

        // For each item in the array, clone it
        // add aria-hidden to it
        // add it into the `.scroller-inner`
        scrollerContent.forEach((item) => {
            const duplicatedItem = item.cloneNode(true);
            duplicatedItem.setAttribute("aria-hidden", true);
            scrollerInner.appendChild(duplicatedItem);
        });
    });
}

$(document).ready(function () {
    $(".gallery-slider").slick({
        centerMode: true, // Mengaktifkan center mode
        centerPadding: "10px", // Spasi antara gambar dengan pusat
        slidesToShow: 3,
        dots: true, // Jumlah slide yang ditampilkan
        responsive: [
            {
                breakpoint: 768, // Pada layar kecil (mobile)
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: "40px",
                },
            },
            {
                breakpoint: 480, // Pada layar yang lebih kecil
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: "20px",
                },
            },
        ],
    });
});

$(document).ready(function () {
    $(".teacher-slider").slick({
        centerMode: true, // Mengaktifkan center mode
        centerPadding: "150px", // Spasi antara gambar dengan pusat
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768, // Pada layar kecil (mobile)
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: "40px",
                },
            },
            {
                breakpoint: 480, // Pada layar yang lebih kecil
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: "20px",
                },
            },
        ],
    });
});

AOS.init();
