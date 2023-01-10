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





    $('#header').hover(function () {
        $('#header').addClass('top');
    }, function () {
        $('#header').removeClass('top');

    });

    window.scrollTo(0, 850);

    $('.sc_down a').click(function () {

        $('html, body').animate({
            scrollTop: $($.attr(this, 'window.scrollTo(0, 850)')).offset().top
        }, 400);
        return false;
    });


});