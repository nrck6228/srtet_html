$(document).ready(function(){
    $('.hero--slider').slick({
        dots: true,
        autoplay: true,
        infinite: true,
        arrows: false,
        touchMove: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $('.service--slider').slick({
        dots: false,
        autoplay: false,
        infinite: false,
        arrows: true,
        touchMove: false,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 3,
                },
            },
        ],
    });

    $('.gov--slider').slick({
        dots: false,
        autoplay: false,
        infinite: false,
        arrows: true,
        touchMove: false,
        speed: 1000,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                },
            },
        ],
    });

    $('.partner--slider').slick({
        dots: true,
        autoplay: false,
        infinite: false,
        arrows: true,
        touchMove: false,
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                },
            },
        ],
    });
});