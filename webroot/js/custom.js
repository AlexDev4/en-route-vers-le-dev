$( document ).ready(function() {


    // init wow js for animation in viewport 

    new WOW().init();


    // init primary nav js 

    jQuery('.stellarnav').stellarNav({
        theme: 'light',
        sticky: false,
        position: 'left',
        closeBtn: false,
        showArrows: true,
    });


    // init sticky js for nav in layout three

    $(".fixed-nav").sticky({ topSpacing: 0 });


    // Init swiper for layout one banner

    var swiper = new Swiper('.swiper-container', {
        initialSlide: 3,
        slidesPerView: 3,
        spaceBetween: 0,
        freeMode: true,
        nav: true,
        loop: true,

        autoplay: {
            delay: 3000,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        breakpoints: {
            1024: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            450: {
                slidesPerView: 1,
                spaceBetween: 0,
            }
        },
    });


    //  init swiper for layout two

    var swiper = new Swiper('.banner-style-two-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        freeMode: true,
        nav: true,
        loop: true,

        autoplay: {
            delay: 5000,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });


    // init swiper for inpost gallery 

    var swiper = new Swiper('.inpostgallery-container', {
        slidesPerView: 'auto',
        centeredSlides: false,
        spaceBetween: 0,
        nav: true,
        slidesPerView: 1,
        effect: 'slide',
        autoplay: {
            delay: 2000,
        },
        pagination: false,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });


    // init swiper for sidebar recent post gallery

    var swiper = new Swiper('.widget-rpag-gallery-container', {
        slidesPerView: 1,
        centeredSlides: false,
        spaceBetween: 0,
        nav: false,
        slidesPerView: 1,
        effect: 'slide',
        pagination: false,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

    });


     // init social sharing network 

    $(".share").jsSocials({
        shares: ["facebook", "twitter", "linkedin", "email"],
        showLabel: false,
        showCount: false,
        shareIn: "popup",
    });


    // Init masonary for home layout four


    $('.masonry-grid').masonry({
        itemSelector: '.grid-item',
    });
    setTimeout(function() {
        $('.masonry-grid').masonry({
            itemSelector: '.grid-item',
        });
    }, 5000);


    // init slider ( owl 2 ) for home layout four 

    var owl2 = $('.banner-style-four-container');
    owl2.owlCarousel({
        items: 3,
        loop: true,
        margin: 10,
        nav: true,
        rtl: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1024: {

                items: 2
            },
            1200: {
                items: 3
            }
        }
    });


    // init owl for related post layout one

    var owl3 = $('.related-post-carousel');
    owl3.owlCarousel({
        items: 2,
        loop: true,
        margin: 40,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            }
        }
    });



    // Owl for related post with 3 items for full layout

    var owl4 = $('.related-post-carousel-three-cards');
    owl4.owlCarousel({
        items: 3,
        loop: true,
        margin: 40,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    });

    // video background in single blog post page 

    $('.covervid-video').coverVid(1920, 1080);



   
});

/*
************************************
*
* End of document ready functions
*
************************************
*/