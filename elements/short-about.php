<div class="container-fluid short-autocenter short-autocenter-desktop">
    <div class="container">
        <div class="title-3">
            <p class="text-24">Кратко о ремонте BMW в Автоцентре ПИК</p>
            <p class="short-autocenter-text">
                Команда БМВ с многолетним стажем обслуживания, ремонта и тюнинга автомобилей BMW. <br />
                Более 10 000 оригинальных и высококачественных аналогов запчастей BMW в наличии на складе.
            </p>
        </div>
        <div class="short-autocenter__3d-gallery">
            <div class="slider-container">
                <span class="about-slider-arrow-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
  <rect width="48" height="48" rx="24" fill="#1C69D4"/>
  <path d="M28.5 37.5L15 24L28.5 10.5" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                </span>
                <span class="about-slider-arrow-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
  <rect x="48" y="48" width="48" height="48" rx="24" transform="rotate(-180 48 48)" fill="#1C69D4"/>
  <path d="M19.5 10.5L33 24L19.5 37.5" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                </span>
                <div class="slider" id="slider">
                    <div class="slide prev-2">
                        <img src="/images/about-slider/about-slide1.jpeg" alt="">
                    </div>
                    <div class="slide prev-1">
                        <img src="/images/about-slider/about-slide2.jpeg" alt="">
                    </div>
                    <div class="slide active">
                        <img src="/images/about-slider/about-slide3.jpeg" alt="">
                    </div>
                    <div class="slide next-1">
                        <img src="/images/about-slider/about-slide4.jpeg" alt="">
                    </div>
                    <div class="slide next-2">
                        <img src="/images/about-slider/about-slide5.jpeg" alt="">
                    </div>

                </div>
                <!--<div class="dots">
                    <span></span>
                    <span></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>-->
            </div>
        </div>
        </div>
    </div>
</div>

<script>
    var Slider = (function() {
        var initSlider = function() {
            var dir = $("html").attr("dir");
            var swipeHandler = new Hammer(document.getElementById("slider"));
            swipeHandler.on('swipeleft', function(e) {
                if (dir == "rtl")
                    $(".about-slider-arrow-left").trigger("click");
                else
                    $(".about-slider-arrow-right").trigger("click");
            });

            swipeHandler.on('swiperight', function(e) {
                if (dir == "rtl")
                    $(".about-slider-arrow-right").trigger("click");
                else
                    $(".about-slider-arrow-left").trigger("click");
            });

            $(".about-slider-arrow-right , .about-slider-arrow-left").click(function(event) {
                var nextActiveSlide = $(".slide.active").next();

                if ($(this).hasClass("about-slider-arrow-left"))
                    nextActiveSlide = $(".slide.active").prev();

                if (nextActiveSlide.length > 0) {
                    var nextActiveIndex = nextActiveSlide.index();
                    $(".dots span").removeClass("active");
                    $($(".dots").children()[nextActiveIndex]).addClass("active");

                    updateSlides(nextActiveSlide);
                }
                if (nextActiveSlide.next().length == 0 || nextActiveSlide.prev().length == 0) {
                    $(this).children().css({"fill":"#CCC"});
                    $(this).find('rect').css({"fill":"#CCC"});
                    $(this).find('path').css({"stroke":"#313E48"});
                } else {
                    $(".about-slider-arrow-right").children().css({"fill":"#1C69D4"});
                    $(".about-slider-arrow-right").find('rect').css({"fill":"#1C69D4"});
                    $(".about-slider-arrow-right").find('path').css({"stroke":"#FFFFFF"});
                    $(".about-slider-arrow-left").children().css({"fill":"#1C69D4"});
                    $(".about-slider-arrow-left").find('rect').css({"fill":"#1C69D4"});
                    $(".about-slider-arrow-left").find('path').css({"stroke":"#FFFFFF"});
                }
            });

            $(".dots span").click(function(event) {
                var slideIndex = $(this).index();
                var nextActiveSlide = $($(".slider").children()[slideIndex]);
                $(".dots span").removeClass("active");
                $(this).addClass("active");

                updateSlides(nextActiveSlide);
            });

            var updateSlides = function(nextActiveSlide) {
                var nextActiveSlideIndex = $(nextActiveSlide).index();

                $(".slide").removeClass("prev-1");
                $(".slide").removeClass("next-1");
                $(".slide").removeClass("active");
                $(".slide").removeClass("prev-2");
                $(".slide").removeClass("next-2");

                nextActiveSlide.addClass("active");

                nextActiveSlide.prev().addClass("prev-1");
                nextActiveSlide.prev().prev().addClass("prev-2");
                nextActiveSlide.addClass("active");
                nextActiveSlide.next().addClass("next-1");
                nextActiveSlide.next().next().addClass("next-2");
            }

            var updateToNextSlide = function(nextActiveSlide)
            {

            }
        }
        return {
            init: function() {
                initSlider();
            }
        }
    })();

    $(function() {
        Slider.init();
    });

</script>