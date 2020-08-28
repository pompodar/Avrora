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

        var slider = new Slideshow("#main-slider");

    });


})();

// services slider
let owl = $('.owl-carousel');
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
        580: {
            items: 2
        },
        769: {
            items: 3
        }
    }
});
window.CheckRange = function() {
    let rng = document.getElementById('myRange');
    let myRangeInput = document.getElementById('myRangeInput');

    myRangeInput.value = rng.value;
    owl.trigger('next.owl.carousel');

}