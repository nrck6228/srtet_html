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
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
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


    $('.news--slider').slick({
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 580,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function() {   
        $('.tab-content .tab-pane').find('.news--slider').slick('refresh');
        //console.log('tab')
    });

    $('.card-header').on('click', function(e) {
        console.log('Collapes')
        $('#content').resize(); // I do not think, you need this.
        $(".news--slider").slick("refresh");
    });
});