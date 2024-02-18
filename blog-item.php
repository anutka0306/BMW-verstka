<?php include 'works-data.php'; ?>
<?php include 'cars-data.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="robots" content="noindex" />
    <meta name="description" content="<?=$works[$params['id']]['description']?>">
    <title><?=$works[$params['id']]['title']?></title>

    <!-- Fonts -->
    <link rel="preload" href="/css/fonts/montserrat/Montserrat-SemiBold.woff" as="font" type="font/woff" crossorigin />
    <link rel="preload" href="/css/fonts/montserrat/Montserrat-Bold.woff" as="font" type="font/woff" crossorigin />
    <link rel="preload" href="/css/fonts/montserrat/Montserrat-Medium.woff" as="font" type="font/woff" crossorigin />
    <link rel="preload" href="/css/fonts/montserrat/Montserrat-Black.woff" as="font" type="font/woff" crossorigin />
    <link rel="preload" href="/css/fonts/montserrat/Montserrat-Regular.woff" as="font" type="font/woff" crossorigin />
    <link rel="preload" href="/css/fonts/montserrat/Montserrat-Light.woff" as="font" type="font/woff" crossorigin />
    <link rel="preload" href="./css/fonts/dinpro.otf" as="font" type="font/opentype" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&amp;display=swap" />
    <link rel="stylesheet" href="/css/fonts/cambria/stylesheet.css">

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <!-- Slick & Swiper -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="/css/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">


    <link rel="shortcut icon" type="image/png" href="./favicon.png" />
    <meta name="og:type" content="website" />
    <link type="text/css" rel="stylesheet" href="/css/theme.css?v=1.<? echo time()?>" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
</head>
<body dark-scroll>
<div class="lp">
    <?php include 'elements/header-top.php';?>
    <?php include 'elements/header-video.php';?>

    <div class="container mt-5">
        <!-- Breadcrumbs -->
        <div class="row">
            <div class="col-12">
                <!--<div class="breadcrumbs mb-5">
                    <a href="#">Ремонт БМВ Сервис БМВ | Диагностика BMW - Бесплатно! / Наши работы </a> / <span>Развал-схождение БМВ Х6</span>
                </div>-->
            </div>
        </div>
        <!-- Short description block-->
        <div class="row">
            <!-- Main content -->
            <div class="col-md-12 col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="blog-list__gallery">
                                <div class="blog-list__gallery_main">
                                    <img src="<?=$works[$params['id']]['image']?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="blog-list__content">
                                <h3 class="text-start"><?=$works[$params['id']]['title']?></h3>
                                <div class="main-info mt-3">
                                    <div class="main-info__item">
                                        Модель: <strong> <?=$works[$params['id']]['model']?></strong>
                                    </div>
                                    <div class="main-info__item">
                                        Кузов: <strong> <?=$works[$params['id']]['carcase']?></strong>
                                    </div>
                                    <div class="main-info__item">
                                        Двигатель: <strong> <?=$works[$params['id']]['engine']?></strong>
                                    </div>
                                    <div class="main-info__item">
                                        Пробег: <strong> <?=$works[$params['id']]['mileage']?></strong>
                                    </div>
                                </div>
                                <div class="descriotion__short mt-3">
                                   <p><?=$works[$params['id']]['description']?></p>
                                </div>
                                <div class="blog-list__buttons">
                                    <button class="btn btn-primary blog__item_btn"><strong>бесплатная</strong>
                                        консультация мастера бмв</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Content block 1 -->
        <div class="row blog__item_content_block mt-5">
           <!-- <div class="col-12">
                <h3>Когда менять маслосъемные колпачки БМВ X5 E70 N62</h3>
            </div>-->
        </div>
        <div class="row">
            <!--<div class="col-md-4 col-12 mt-5">
                <div class="blog__item_content_gallery">
                    <div class="blog__item_content_gallery_row">
                        <img src="/images/blog-item/bmw-7.png" alt="">
                        <img src="/images/blog-item/bmw-5.png" alt="">
                    </div>
                    <div class="blog__item_content_gallery_row mt-1">
                        <img src="/images/blog-item/bmw-5.png" alt="">
                        <img src="/images/blog-item/bmw-7.png" alt="">
                    </div>
                </div>
            </div>-->
            <div class="col-md-12 col-12 mt-5">
                <div class="blog__item_content_text">
                    <?=$works[$params['id']]['content']?>
                    <!--<p class="text-important">
                        Важно: маслосъемные колпачки имеет смысл менять каждые 100 000 км пробега.
                    </p>-->
                </div>
            </div>
        </div>


        <!-- Content block 2 -->
        <!--<div class="row blog__item_content_block mt-5">
            <div class="col-12">
                <h3>Симптомы к замене маслосъемных колпачков BMW X5 E70 N62</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-12 mt-5">
                <div class="blog__item_content_gallery">
                    <div class="blog__item_content_gallery_row">
                        <img src="/images/blog-item/bmw-7.png" alt="">
                        <img src="/images/blog-item/bmw-5.png" alt="">
                    </div>
                    <div class="blog__item_content_gallery_row mt-1">
                        <img src="/images/blog-item/bmw-5.png" alt="">
                        <img src="/images/blog-item/bmw-7.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-12 mt-5">
                <div class="blog__item_content_text">
                    <p>При выявления неисправностей мы проводим компьютерную диагностику. Данная процедура необходима для выявления ошибок и неисправностей. Диагностика проведена, визуальный осмотр выполнен. Масло попадает в камеру сгорания, а это первый сигнал к замене маслосъемных колпачков.</p>
                    <ol>
                        <li>Признаки износа маслосъемных колпачков:</li>
                        <li>Повышенный расход масла – до 1 литра на 1000 км;</li>
                        <li>На свечах зажигания имеется масляная пленка;</li>
                        <li>Сизовато-белый дым из выхлопной трубы;</li>
                        <li>Запах горелого масла, особенно чувствуется при отсутствии катализатора.</li>
                    </ol>
                </div>
            </div>
        </div>-->

        <!-- Content block 3 -->
        <!--<div class="row blog__item_content_block mt-5">
            <div class="col-12">
                <h3>Как менять маслосъемные колпачки БМВ X5 E70 N62</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-12 mt-5">
                <div class="blog__item_content_gallery">
                    <div class="blog__item_content_gallery_row">
                        <img src="/images/blog-item/bmw-7.png" alt="">
                        <img src="/images/blog-item/bmw-5.png" alt="">
                        <img src="/images/blog-item/bmw-7.png" alt="">
                        <img src="/images/blog-item/bmw-5.png" alt="">
                    </div>
                    <div class="blog__item_content_gallery_row mt-1">
                        <img src="/images/blog-item/bmw-5.png" alt="">
                        <img src="/images/blog-item/bmw-7.png" alt="">
                        <img src="/images/blog-item/bmw-5.png" alt="">
                        <img src="/images/blog-item/bmw-7.png" alt="">
                    </div>
                </div>
            </div>
        </div>-->

        <!-- Content block 4 -->
        <!--<div class="row blog__item_content_block mt-5">
            <div class="col-12">
                <h3>Фото замены маслосъемных колпачков БМВ X5 E70 N62</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-12 mt-5">
                <div class="blog__item_content_gallery">
                    <div class="blog__item_content_gallery_row">
                        <img src="/images/blog-item/bmw-7.png" alt="">
                        <img src="/images/blog-item/bmw-5.png" alt="">
                    </div>
                    <div class="blog__item_content_gallery_row mt-1">
                        <img src="/images/blog-item/bmw-5.png" alt="">
                        <img src="/images/blog-item/bmw-7.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-12 mt-5">
                <div class="blog__item_content_text">
                    <p>Замена маслосъемных колпачков – дело хлопотное. Нужно, чтобы у механика была набита рука. Нужно разобрать много элементов и затем, очень аккуратно заменить каждый колпачок.</p>
                    <p>Основные этапы по замене маслосъемных колпачков BMW выглядят так:</p>
                    <ol>
                        <li>Вскрываем клапанные крышки,</li>
                        <li>Демонтируем распределительные валы, сервоприводы Valvetronic и Ваносы,</li>
                        <li>Меняем маслосъемные колпачки,</li>
                        <li>Выполняем сборку и монтаж с выставлением фаз газораспределения.</li>
                    </ol>
                    <p>Работа выполнена, повышенный расход масла устранен, владелец доволен. Если у вас остались вопросы – звоните!</p>
                </div>
            </div>
        </div>-->

    </div>

    <?php include 'elements/check-works-blog.php';?>
    <?php include 'elements/choose-service.php';?>
    <?php include 'elements/contacts.php'; ?>
    <?php include 'elements/footer.php';?>
</div>

<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script defer type="text/javascript" src="/js/custom.js"></script>
<script type="text/javascript" src="/js/imasked.js"></script>
<script src="/js/swiper-bundle.min.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a) {
        m[i]=m[i]||function() { (m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(56306008, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56306008" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
    (function(w, d, s, h, id) {
        w.roistatProjectId = id; w.roistatHost = h;
        var p = d.location.protocol == "https:" ? "https://" : "http://";
        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
        var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com', '0dc92382b437fa129ca715bc94304147');
</script>
</body>
</html>