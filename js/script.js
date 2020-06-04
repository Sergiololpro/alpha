$(document).ready(function () {

    // Gallery change
    $(".l_gallery__img").on("click", function() {
        var id = $(this).index + 1;

        $(".l_gallery__img").removeClass("active");
        $(this).addClass("active");

        $('.l_card__slider').slick('slickGoTo', id, false);
    });

    // Steps
    $(".go_to_1").on("click", function() {
        $(".l_step, .l_step__ttle").removeClass("active");
        $(".l_step[data-id='1'], .l_step__ttle[data-id='1']").addClass("active");
    });

    $(".go_to_2").on("click", function() {
        $(".l_step, .l_step__ttle").removeClass("active");
        $(".l_step[data-id='2'], .l_step__ttle[data-id='2']").addClass("active");
    });

    $(".go_to_3").on("click", function() {
        $(".l_step, .l_step__ttle").removeClass("active");
        $(".l_step[data-id='3'], .l_step__ttle[data-id='3']").addClass("active");
    });

    // Order slider
    if ($('.l_card__slider').length) {
        $('.l_card__slider').slick({
            slidesToScroll: 1,
            slidesToShow: 1,
            prevArrow: '<div class="l_nav l_nav-prev"></div>',
            nextArrow: '<div class="l_nav l_nav-next"></div>',
            responsive: [{
                breakpoint: 641,
                settings: {
                    dots: true
                }
            }]
        });

        $(".l_card__slider").on('afterChange', function(event, slick, currentSlide, nextSlide){
            $(".l_gallery__img").removeClass("active");
            $(".l_gallery__img:nth-child(" + parseInt(currentSlide + 1) + ")").addClass("active");
        });
    }

    // Header
    $(window).on('scroll load', function() {
        if ($(this).scrollTop() > 0) {
            $('.l_header').removeClass('transparent');
        } else {
            $('.l_header').addClass('transparent');
        }
    });

    // Langueage
    $(".l_lang").on("click", function() {
        $(this).toggleClass("active");
    });

    // Langueage choose
    $(".l_lang__row").on("click", function() {
        var id = $(this).data("id");

        $(".l_lang__row, .l_lang__choose").removeClass("active");
        $(".l_lang__row[data-id='" + id + "'], .l_lang__choose[data-id='" + id + "']").addClass("active");
    });

    // Currency
    $(".l_currency").on("click", function() {
        $(this).toggleClass("active");
    });

    // Currency choose
    $(".l_currency__row").on("click", function() {
        var id = $(this).data("id");

        $(".l_currency__row, .l_currency__choose").removeClass("active");
        $(".l_currency__row[data-id='" + id + "'], .l_currency__choose[data-id='" + id + "']").addClass("active");
    });

    // Close modal
    $(".overlay").on("click", function() {
        $('.overlay, .modal').removeClass("active");
    });

    $(".modal__close").on("click", function() {
        $('.overlay').removeClass("active");
        $(this).closest(".modal").removeClass("active");
    });

    // Open modals
    $(".open_menu").on("click", function() {
        $('.overlay, .modal_menu').addClass("active");
    });

    $(".open_one").on("click", function() {
        $('.overlay, .modal_one').addClass("active");
    });

    $(".open_respo").on("click", function() {
        $('.overlay, .modal_respo').addClass("active");
    });

    $(".open_break").on("click", function() {
        $('.overlay, .modal_break').addClass("active");
    });

    $(".open_aero").on("click", function() {
        $('.overlay, .modal_aero').addClass("active");
    });

    $(".open_lorem").on("click", function() {
        $('.overlay, .modal_lorem').addClass("active");
    });

});
