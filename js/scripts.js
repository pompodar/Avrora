// header slider
(function() {

    function Slideshow(element) {
        this.el = document.querySelector(element);
        this.init();
    }

    Slideshow.prototype = {
        init: function() {
            this.wrapper = this.el.querySelector(".slider-wrapper");
            this.slides = this.el.querySelectorAll(".slide");
            this.previous = this.el.querySelector(".slider-previous");
            this.next = this.el.querySelector(".slider-next");
            this.index = 0;
            this.total = this.slides.length;
            this.timer = null;

            this.action();
            this.stopStart();
        },
        _slideTo: function(slide) {
            var currentSlide = this.slides[slide];
            currentSlide.style.opacity = 1;

            for (var i = 0; i < this.slides.length; i++) {
                var slide = this.slides[i];
                if (slide !== currentSlide) {
                    slide.style.opacity = 0;
                }
            }
        },
        action: function() {
            var self = this;
            self.timer = setInterval(function() {
                self.index++;
                if (self.index == self.slides.length) {
                    self.index = 0;
                }
                self._slideTo(self.index);

            }, 6000);
        },
        stopStart: function() {
            var self = this;
            self.el.addEventListener("mouseover", function() {
                clearInterval(self.timer);
                self.timer = null;

            }, false);
            self.el.addEventListener("mouseout", function() {
                self.action();

            }, false);
        }


    };

    document.addEventListener("DOMContentLoaded", function() {

        let slider = new Slideshow("#main-slider");

    });


})();

// services slider
jQuery(function() {
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


    // input range

    let counter = 0;
    let rng1 = 0;
    let rng2 = 0;

    window.CheckRange = function() {
        if (counter % 2 === 0) {
            rng1 = document.getElementById('myRange').value;
            if (rng1 > rng2) {
                owl.trigger('next.owl.carousel');
            } else {
                owl.trigger('prev.owl.carousel');

            }
        } else {
            rng2 = document.getElementById('myRange').value;
            if (rng1 > rng2) {
                owl.trigger('prev.owl.carousel');
            } else {
                owl.trigger('next.owl.carousel');
            }
        }
        counter++;
    }

    // modal window

    if (jQuery(window).width() > 830) {

        let span = jQuery(".close");

        jQuery(".owl-carousel div img, .services__slider__additional_pics img").on('click', function() {
            jQuery("#myModal").css("display", "flex");
            jQuery(".modal_img").attr("src", jQuery('#' + event.target.id).attr('src'));

        });

        jQuery(".close").on('click', function() {
            jQuery("#myModal").css("display", "none");
        });

        jQuery("windows").on('click', function() {
            if (event.target == jQuery("#myModal")) {
                jQuery("#myModal").css("display", "none");
            }
        });
    }

    // sticky header

    if (jQuery(window).width() > 800) {

        window.onscroll = function() { myFunction() };
        let header = jQuery(".sticky_header");
        let sticky = header.offset().top;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.addClass("sticky");
            } else {
                header.removeClass("sticky");
            }
        }
    }


    // on top when refresh
    let toTop = true;

    jQuery(".services__slider__description").parent().on("click", function() {
        toTop = false;
    });

    jQuery("menu ul li a").on("click", function() {
        toTop = false;
    });

    jQuery(".services__description__button").on("click", function() {
        toTop = false;
    });

    jQuery(".about__details a").on("click", function() {
        toTop = false;
    });

    jQuery(window).on('beforeunload', function() {
        if (toTop === true) {
            jQuery(window).scrollTop(0);
        }
    });

    // contact form

    jQuery(".services__slider__price__button").on("click", function() {
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