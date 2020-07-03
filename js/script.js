$(document).ready(function () {

    // Gallery change
    $(".l_gallery__img").on("click", function() {
        var id = $(this).index();

        $(".l_gallery__img").removeClass("active");
        $(this).addClass("active");
        
        $('.l_card__slider').slick('slickGoTo', id, false);
    });

    // Steps
    $(".go_to_1").on("click", function() {
        $(".l_step, .l_step__ttle").removeClass("active");
        $(".l_step[data-id='1'], .l_step__ttle[data-id='1']").addClass("active");

        scroll();
    });

    $(".go_to_2").on("click", function() {
        $(".l_step, .l_step__ttle").removeClass("active");
        $(".l_step[data-id='2'], .l_step__ttle[data-id='2']").addClass("active");

        scroll();
    });

    $(".go_to_3").on("click", function() {
        $(".l_step, .l_step__ttle").removeClass("active");
        $(".l_step[data-id='3'], .l_step__ttle[data-id='3']").addClass("active");

        scroll();
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

        // To top
        if ($(window).scrollTop() > 500) {
            $('.right_navs').addClass('active');
        } else {
            $('.right_navs').removeClass('active');
        }

        animations();
    });

    // To top
    $('.to_top').on("click", function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
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

    $(".modal__close, .modal .l_button").on("click", function() {
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

    $(".o_mask").on("click", function() {
        $('.overlay, .new_modal-mask').addClass("active");
    });

    $(".o_light").on("click", function() {
        $('.overlay, .new_modal-light').addClass("active");
    });

    $(".o_air").on("click", function() {
        $('.overlay, .new_modal-air').addClass("active");
    });

    $(".o_carbon").on("click", function() {
        $('.overlay, .new_modal-carbon').addClass("active");
    });
    
    $(".o_spoiler").on("click", function() {
        $('.overlay, .new_modal-spoiler').addClass("active");
    });

    $(".o_glasses").on("click", function() {
        $('.overlay, .new_modal-glasses').addClass("active");
    });
    
    $(".o_blue").on("click", function() {
        $('.overlay, .new_modal-blue').addClass("active");
    });

    $(".o_lens").on("click", function() {
        $('.overlay, .new_modal-lens').addClass("active");
    });

    $(".o_when").on("click", function() {
        $('.overlay, .new_modal-when').addClass("active");
    });

    $(".o_size").on("click", function() {
        $('.overlay, .new_modal-size').addClass("active");
    });
    
    $(".o_terms").on("click", function() {
        $('.overlay, .new_modal-terms').addClass("active");
    });

    // Shipping address
    $("#same").on("click", function() {
        if ($('#same').is(':checked')) {
            $('.l_shipping').removeClass("active");
        } else {
            $('.l_shipping').addClass("active"); 
        }
    });

    // Create account
    $("#order").on("click", function() {
        if ($('#order').is(':checked')) {
            $('.l_account').addClass("active");
        } else {
            $('.l_account').removeClass("active"); 
        }
    });

    // Select2
    $('.select2').select2({
        minimumResultsForSearch: -1,
        placeholder: $(this).data("placeholder")
    });

    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    function scroll() {
        if (isMobile.any()) {
            $("body, html").animate({
                scrollTop: $(".l_card__right").offset().top - $(".l_header").height()
            }, 800);
        }
    }

    // Animations
    function animations() {
        $(".animation").each(function () {
            var windowTop = $(window).height() * .9 + $(window).scrollTop(),
                objectTop = $(this).offset().top;

            if (windowTop > objectTop) {
                $(this).addClass('animated');
            } else {
                $(this).removeClass('animated');
            }
        });
    }

});
