jQuery(function() {
    // services slider
    let owl = jQuery('.owl-carousel');
    owl.owlCarousel({
        items: 3,
        margin: 30,
        loop: true,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                margin: 0,
            },
            500: {
                items: 2
            },
            769: {
                items: 3
            }
        }
    });

    // contact form

    jQuery(".services__slider__price__button.single").on("click", function() {
        jQuery("#myModal_services").css("display", "none");
        jQuery("#contact_form").css("display", "flex");
    });

    jQuery(".close.contact").on('click', function() {
        jQuery("#contact_form").css("display", "none");
    });

    jQuery("windows").on('click', function() {
        if (event.target == jQuery("#contact_form")) {
            jQuery("#contact_form").css("display", "none");
        }
    });

});