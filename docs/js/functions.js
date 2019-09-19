$(document).ready(function() {

    /* Slideshow */
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false
    });

    /* Menu hamburger */
    $('.header__hamburger').click(function(){
        $('.header__hamburger-icon').toggleClass('active');
        $('.header__mobile-plate').toggleClass('active');
        $('html').toggleClass('menu-active');
    });

    /* Iframe game embed */
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://jscdn.lttlapp.com/sdk/sdk.v1.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'lottoland-b2b-sdk'));

    /* Change menu after scroll */
    function menuScroll(){
        if ($(window).scrollTop() > 0) {
            $('.header').addClass('scrolled');
        } else {
            $('.header').removeClass('scrolled');
        }
    }
    $(window).scroll(function(){
        menuScroll();
    });
    menuScroll();

});