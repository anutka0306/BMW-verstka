<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="robots" content="noindex" />
    <title>Blog</title>

    <!-- Fonts -->
    <link rel="preload" href="css/fonts/montserrat/Montserrat-SemiBold.woff" as="font" type="font/woff" crossorigin />
    <link rel="preload" href="css/fonts/montserrat/Montserrat-Bold.woff" as="font" type="font/woff" crossorigin />
    <link rel="preload" href="css/fonts/montserrat/Montserrat-Medium.woff" as="font" type="font/woff" crossorigin />
    <link rel="preload" href="css/fonts/montserrat/Montserrat-Black.woff" as="font" type="font/woff" crossorigin />
    <link rel="preload" href="css/fonts/montserrat/Montserrat-Regular.woff" as="font" type="font/woff" crossorigin />
    <link rel="preload" href="css/fonts/montserrat/Montserrat-Light.woff" as="font" type="font/woff" crossorigin />
    <link rel="preload" href="./css/fonts/dinpro.otf" as="font" type="font/opentype" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&amp;display=swap" />
    <link rel="stylesheet" href="css/fonts/cambria/stylesheet.css">

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <!-- Slick & Swiper -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">


    <link rel="shortcut icon" type="image/png" href="./favicon.png" />
    <meta name="og:type" content="website" />
    <link type="text/css" rel="stylesheet" href="css/theme.css?v=1.<? echo time()?>" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
</head>
<body dark-scroll>
<div class="lp">
    <?php include 'elements/top-nav.php';?>
    <?php include 'elements/header-top.php';?>
    <?php include 'elements/header-slider.php';?>

    <div class="container mt-5">
        <div class="row">
            <!-- Breadcrumbs -->
            <div class="col-12">
                <div class="breadcrumbs mb-5">
                    <a href="#">Ремонт БМВ Сервис БМВ | Диагностика BMW - Бесплатно! </a> / <span>Наши работы</span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Main content -->
            <div class="col-md-9 col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="blog-list__gallery">
                                <div class="blog-list__gallery_main">
                                    <img src="/images/blog-list/blog-list-main.png" alt="">
                                </div>
                                <div class="blog-list__gallery_thumbs mt-2">
                                    <img src="/images/blog-list/blog-list-small3.png" alt="">
                                    <img src="/images/blog-list/blog-list-small1.png" alt="">
                                    <img src="/images/blog-list/blog-list-small2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="blog-list__content">
                                <h3>Замена маслосъемных колпачков BMW X5 E70 N62</h3>
                                <div class="main-info mt-3">
                                    <div class="main-info__item">
                                        Модель: <strong> X5</strong>
                                    </div>
                                    <div class="main-info__item">
                                        Кузов: <strong> E70</strong>
                                    </div>
                                    <div class="main-info__item">
                                        Двигатель: <strong> N62</strong>
                                    </div>
                                    <div class="main-info__item">
                                        Пробег: <strong> 193 000</strong>
                                    </div>
                                </div>
                                <div class="work-list mt-3">
                                    <h4>Какие работы делали:</h4>
                                    <ol>
                                        <li>Когда менять маслосъемные колпачки ...</li>
                                        <li>Симптомы к замене маслосъемных колп...</li>
                                        <li>Как менять маслосъемные колпачки БМ...</li>
                                        <li>Фото замены маслосъемных колпачков ...</li>
                                        <li>Стоимость ремонта ВМВ</li>
                                        <li>Узнать больше о ремонте ВМВ</li>
                                    </ol>
                                </div>
                                <div class="blog-list__buttons">
                                    <button class="btn btn-primary">Читать дальше</button>
                                    <button class="btn btn-outline-primary">расчет стоимости <br/>на вашу модель</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div class="col-md-3 col-12 blog-list__filter_wrapper">
                <div class="blog-list__filter">
                    <h4>ФИЛЬТР ПО МОДЕЛИ</h4>
                    <div class="blog-list__filter_items">
                        <a href="#">BMW 1</a>
                        <a href="#">BMW 2</a>
                        <a href="#">BMW 3</a>
                        <a href="#">BMW 4</a>
                        <a href="#">BMW 5</a>
                        <a href="#">BMW 6</a>
                        <a href="#">BMW 7</a>
                        <a href="#">BMW 8</a>
                        <a href="#">BMW X1</a>
                        <a href="#">BMW X2</a>
                        <a href="#">BMW X3</a>
                        <a href="#">BMW X4</a>
                        <a href="#">BMW X5</a>
                        <a href="#">BMW X6</a>
                        <a href="#">BMW X7</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'elements/contacts.php'; ?>
    <?php include 'elements/footer.php';?>
</div>

<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script>
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
                slidesPerView: 3
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

</script>
</body>
</html>