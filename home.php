<?php include 'works-data.php'; ?>
<?php include 'reviews-data.php'; ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="robots" content="noindex" />
        <meta name="description" content="3 профильных автосервиса по ремонту BMW. Свой склад запчастей. Гарантия."/>
        <title>Ремонт BMW в Санкт-Петербурге - Дешевле Дилера</title>

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
        <link rel="stylesheet" href="css/slick-theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">

        
        <link rel="shortcut icon" type="image/png" href="./favicon.png" />
        <meta name="og:type" content="website" />
        <link type="text/css" rel="stylesheet" href="/css/theme.css?v=1.<? echo time()?>" />
        <link rel="stylesheet" href="/css/slider3d.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
    </head>
<body dark-scroll>
<div class="lp">
    <?php /*include 'elements/top-nav.php';*/?>
    <?php include 'elements/header-top.php';?>
    <?php include 'elements/header-video.php';?>
    <?php include 'elements/repair-info.php'; ?>
    <?php include 'elements/why-we.php';?>
    <?php include 'elements/short-about.php'?>
    <?php include 'elements/short-about-mobile.php'?>
    <?php include 'elements/video-review.php';?>
    <?php include 'elements/check-works.php';?>
    <?php /*include 'elements/quiz.php';*/?>
    <?php include 'elements/quiz1.php';?>
    <?php include 'elements/about-service.php';?>
    <?php include 'elements/repare-and-improving.php';?>
    <?php include 'elements/choose-service.php';?>
    <?php include 'elements/managers.php';?>
    <?php include 'elements/cliente-reviews.php';?>
    <?php include 'elements/l-unconstraind-2.php';?>
    <?php include 'elements/price-list.php'; ?>
    <?php include 'elements/question-form.php'; ?>
    <?php include 'elements/contacts.php'; ?>
    <?php include 'elements/footer.php';?>
</div>

<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script defer type="text/javascript" src="/js/custom.js"></script>
<script type="text/javascript" src="/js/imasked.js"></script>
<script type="text/javascript" src="/js/quiz.js"></script>
<script src="js/swiper-bundle.min.js"></script>

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