import 'slick-carousel';
$(document).ready(function(){

    $(window).scroll(function() {
        if ($(this).scrollTop() > 10) {
            $('header').addClass('header-fixed');
        } else {
            $('header').removeClass('header-fixed');
        }
    });

    $('.slick-speakers').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        arrows: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

});
