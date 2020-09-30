jQuery(function() {
    if (jQuery(window).width() > 830) {

        let span = jQuery(".close");

        jQuery(".owl__carousel__not__slider div img, .services__slider__description img").on('click', function() {
            jQuery("#myModal_services").css("display", "flex");
            jQuery(".modal_img").attr("src", jQuery('#' + event.target.id).attr('src'));

        });

        jQuery(".close").on('click', function() {
            jQuery("#myModal_services").css("display", "none");
        });

        jQuery("windows").on('click', function() {
            if (event.target == jQuery("#myModal")) {
                jQuery("#myModal_services").css("display", "none");
            }
        });
    }

    // contact form
    jQuery(".services__slider__price__button").on("click", function() {
        jQuery("#myModal_services").css("display", "none");
        jQuery("#contact_form_services").css("display", "flex");
    });

    jQuery(".close.contact").on('click', function() {
        jQuery("#contact_form_services").css("display", "none");
    });

    jQuery("windows").on('click', function() {
        if (event.target == jQuery("#contact_form_services")) {
            jQuery("#contact_form_services").css("display", "none");
        }
    });

});