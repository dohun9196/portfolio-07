$(function () {
    $('.mainVisual .main_slide').slick({
        dots: true,
        autoplay: true,
        arrows: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        autoplaySpeed: 4000,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
    });


    $(window).scroll(function () {
        var scrollValue = $(document).scrollTop();
        console.log(scrollValue);
    });

    $(window).scroll(function () {
        var height = $(document).scrollTop();

        if (height > 2) {
            $('#header').addClass('on');
        } else if (height < 1) {
            $('#header').removeClass('on');
        }
    });




});