<div class="check-work">
    <div class="container">
        <p class="title-5">Ремонт БМВ <span>|</span> Сервис БМВ <span>|</span> Диагностика BMW</p>
        <p class="description">Наша команда подробно показывает отчеты о ремонте автомобилей BMW:</p>
        <div class="check-slider__wrapper">
            <div class="swiper check-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($works as $key => $work): ?>
                     <div class="swiper-slide">
                        <div class="check-item">
                            <div class="calendar__wrapper">
                                <img class="calendar" src="images/calendar.svg" alt="" width="18" height="16" />
                                <p class="text-26"><?=$work['date']?></p>
                            </div>
                            <p class="item-top-span"><?=mb_substr($work['title'], 0, 22)?>...</p>
                            <img class="image" src="<?=$work['image']?>" alt="" />
                            <p class="item-description-span"><?=mb_substr($work['description'], 0, 75)?>...</p>
                            <a href="/blog/<?=$key?>" class="btn-holder1">ЧИТАТЬ ПОДРОБНЕЕ</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-video-review-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>