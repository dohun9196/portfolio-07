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



    var cover = $('.mainBusiness .flex_inner .busi_cover')
    var covero = $('.mainBusiness .flex_inner .busi_cover.on')
    var moreA = $('.mainBusiness .flex_inner figure .more a')
    var moreAo = $('.mainBusiness .flex_inner figure .more a.on')

    $(moreA).hover(function (e) {
        $(moreA).addClass('on');
    }, function (e) {

        $(moreA).removeClass('on');

        if ($(moreA) == $(moreAo)) {
            $(cover).toggleClass('on');
        }
        // else if (moreA == $('.more a')) {
        //     $('.mainBusiness .flex_inner .busi_cover').removeClass('on');
        // }
    });

});