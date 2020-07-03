$(document).ready(function () {
    //toggles menu
    $('#toggle').click(function () {
        if ($('.menu').hasClass('hidden')) {
            $('.menu').removeClass('hidden');
            $('.menu').addClass('block');
            $('header').addClass('fixed bg-white h-full');
        } else {
            $('.menu').removeClass('block');
            $('.menu').addClass('hidden');
            $('header').removeClass('fixed bg-white h-full');
        }
    })
    //auto disables menu on resize
    $(window).resize(function () {
        if ($(window).width() > 768) {
            if (!$('.menu').hasClass('hidden')) {
                $('.menu').removeClass('block');
                $('.menu').addClass('hidden');
                $('header').removeClass('fixed bg-white h-full');
            }
        }
    });
    //responsive menu for Article.php
    $('#toggle-button-mobile').click(function () {
        if($('.info-container').hasClass('bottom-500')) {
            $('#toggle-button-mobile').css('transform', 'rotate(180deg)');
            $('.info-container').removeClass('bottom-500');
            $('.info-container').addClass('bottom-0');

        } else {
            $('#toggle-button-mobile').css('transform', 'rotate(0deg)');
            $('.info-container').removeClass('bottom-0');
            $('.info-container').addClass('bottom-500'); 
        }
    })
})