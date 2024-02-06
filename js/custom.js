 var video_swiper = new Swiper('.swiper.slider-video-review', {
    speed: 400,
    slidesPerView: 1,
    spaceBetween: 37,
    loop: true,
    pagination: {
    el: ".swiper-video-review-pagination",
    type: "progressbar",
},
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
},
    breakpoints: {
    420: {
    slidesPerView: 2
},
    767: {
    slidesPerView: 3
},
    992: {
    slidesPerView: 4
},
    1240: {
    slidesPerView: 4
},
    1530: {
    slidesPerView: 4
},
}
});
    var check_swiper = new Swiper('.swiper.check-slider', {
    speed: 400,
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
    el: ".swiper-check-slider-pagination",
    type: "progressbar",
},
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
},
    breakpoints: {
    420: {
    slidesPerView: 2
},
    767: {
    slidesPerView: 3
},
    992: {
    slidesPerView: 3
},
    1240: {
    slidesPerView: 3
},
    1530: {
    slidesPerView: 4
},
}
});



    $('.quiz-slider').slick({
    dots: true,
    speed: 300,
    slidesToShow: 4,
    rows:3,
    slidesToScroll:1,
    arrows:false,
    focusOnSelect:false,
    focusOnChange:false,
    centerMode:false,
    infinite: false,
    responsive: [
{
    breakpoint: 1024,
    settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: false,
    focusOnSelect:false,
    focusOnChange:false,
    dots: true
}
},
{
    breakpoint: 600,
    settings: {
    slidesToShow: 2,
    focusOnSelect:false,
    focusOnChange:false,
    slidesToScroll: 2
}
},
{
    breakpoint: 480,
    settings: {
    slidesToShow: 2,
    focusOnSelect:false,
    focusOnChange:false,
    centerMode:false,
    infinite: false,
    slidesToScroll: 2
}
}
    ]
});
    $('.quiz-intro-slider').slick({
    dots: false,
    speed: 300,
    slidesToShow: 3,
    //slide:'.quiz-thumbnail',
    rows:1,
    variableWidth: true,
    slidesToScroll:1,
    arrows:false,
    responsive: [
{
    breakpoint: 1024,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots: false
}
},
{
    breakpoint: 600,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots: false
}
},
{
    breakpoint: 480,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots: false
}
}
    ]
});

    $('.managers-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
{
    breakpoint: 600,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots: true
}
},
    ]
});

    $('.cliente-reviews-slick1').slick({
    dots: false,
    /*autoplay: true,*/
    infinite: true,
    /*speed: 300,*/
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
{
    breakpoint: 600,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots: true
}
},
    ]
}).next();


    $('.cliente-reviews-slick2').slick({
    dots: false,
    autoplay: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
{
    breakpoint: 600,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots: true
}
},
    ]
}).next();

    $('.cliente-reviews-slick3').slick({
    dots: false,
    autoplay: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
{
    breakpoint: 600,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots: true
}
},
    ]
}).next();

    $('.cliente-reviews-slick4').slick({
    dots: false,
    autoplay: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
{
    breakpoint: 600,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots: true
}
},
    ]
}).next();

    $('.cliente-reviews-slick5').slick({
    dots: false,
    autoplay: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
{
    breakpoint: 600,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots: true
}
},
    ]
}).next();

 let currentDate = new Date();
 let currentHour = currentDate.getHours();
 if(currentHour >= 9 && currentHour < 21) {
     console.log(currentHour);
     $(".work-time").text('Работаем сейчас');
 }