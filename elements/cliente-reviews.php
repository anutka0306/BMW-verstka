<div class="client-reviews">
    <div class="l-constrained-9 container">
        <p class="text-81">Отзывы наших клиентов</p>

        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0" role="tab" aria-controls="simple-tabpanel-0" aria-selected="true">Все отзывы</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab" aria-controls="simple-tabpanel-1" aria-selected="false">Drive2</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="simple-tab-2" data-bs-toggle="tab" href="#simple-tabpanel-2" role="tab" aria-controls="simple-tabpanel-2" aria-selected="false"><img class="image-543" src="images/image_543.png" alt="" width="14" height="14" />Google Maps</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="simple-tab-3" data-bs-toggle="tab" href="#simple-tabpanel-3" role="tab" aria-controls="simple-tabpanel-3" aria-selected="false"><img class="image-544" src="images/image_544.png" alt="" width="11" height="11" />2ГИС</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="simple-tab-4" data-bs-toggle="tab" href="#simple-tabpanel-4" role="tab" aria-controls="simple-tabpanel-4" aria-selected="false"><img class="image-545" src="images/image_545.png" alt="" width="10" height="16" />Яндекс.Карты</a>
            </li>
        </ul>
        <div class="tab-content pt-5" id="tab-content">
            <!-- All tab -->
            <div class="tab-pane active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
                <div class="cliente-reviews-slick cliente-reviews-slick1">
                    <?php foreach ($all as $item):?>
                    <div class="cliente-reviews-slick__item">
                        <div class="cliente-reviews-slick__item_wrapper">
                            <div class="row-45  rectangle-2336-3__wrapper">
                                <div class="rectangle-2336-3"></div>
                                <div class="col-61">
                                    <p class="vasilii-3"><?= $item['name']?></p>
                                    <p class="text-94"><?= $item['date']?></p>
                                </div>
                                <div class="review__rating"><img src="/images/5-star-rating.png"><p class="text-95">5.0</p></div>
                            </div>
                            <p class="text-96">
                                <?= mb_substr($item['text'], 0, 250)?>...
                            </p>
                            <p class="text-97"><a href="<?= $item['link']?>">Читать отзыв</a></p>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>

            <!-- Drive tab-->
            <div class="tab-pane" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
                <div class="cliente-reviews-slick cliente-reviews-slick2">
                    <?php foreach ($drive2 as $item): ?>
                        <div class="cliente-reviews-slick__item">
                        <div class="cliente-reviews-slick__item_wrapper">
                            <div class="row-45  rectangle-2336-3__wrapper">
                                <div class="rectangle-2336-3"></div>
                                <div class="col-61">
                                    <p class="vasilii-3"><?= $item['name']?></p>
                                    <p class="text-94"><?= $item['date']?></p>
                                </div>
                                <div class="review__rating"><img src="/images/5-star-rating.png"><p class="text-95">5.0</p></div>
                            </div>
                            <p class="text-96">
                                <?= mb_substr($item['text'], 0, 250)?>...
                            </p>
                            <p class="text-97"><a href="<?= $item['link']?>">Отзыв из 2Drive</a></p>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>

            <!-- Google maps tab -->
            <div class="tab-pane" id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">
                <div class="cliente-reviews-slick cliente-reviews-slick3">
                    <?php foreach ($gmaps as $item): ?>
                    <div class="cliente-reviews-slick__item">
                        <div class="cliente-reviews-slick__item_wrapper">
                            <div class="row-45  rectangle-2336-3__wrapper">
                                <div class="rectangle-2336-3"></div>
                                <div class="col-61">
                                    <p class="vasilii-3"><?= $item['name']?></p>
                                    <p class="text-94"><?= $item['date']?></p>
                                </div>
                                <div class="review__rating"><img src="/images/5-star-rating.png"><p class="text-95">5.0</p></div>
                            </div>
                            <p class="text-96">
                                <?= mb_substr($item['text'], 0, 250)?>...
                            </p>
                            <p class="text-97"><a href="<?= $item['link']?>">Отзыв из Google Maps</a></p>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>

            <!-- 2Гис tab-->
            <div class="tab-pane" id="simple-tabpanel-3" role="tabpanel" aria-labelledby="simple-tab-3">
                <div class="cliente-reviews-slick cliente-reviews-slick4">
                    <?php foreach ($gis as $item): ?>
                    <div class="cliente-reviews-slick__item">
                        <div class="cliente-reviews-slick__item_wrapper">
                            <div class="row-45  rectangle-2336-3__wrapper">
                                <div class="rectangle-2336-3"></div>
                                <div class="col-61">
                                    <p class="vasilii-3"><?= $item['name']?></p>
                                    <p class="text-94"><?= $item['date']?></p>
                                </div>
                                <div class="review__rating"><img src="/images/5-star-rating.png"><p class="text-95">5.0</p></div>
                            </div>
                            <p class="text-96">
                                <?= mb_substr($item['text'], 0, 250)?>...
                            </p>
                            <p class="text-97"><a href="<?= $item['link']?>">Отзыв из 2ГИС</a></p>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>

            <!-- Яндекс.Карты tab -->
            <div class="tab-pane" id="simple-tabpanel-4" role="tabpanel" aria-labelledby="simple-tab-4">
                <div class="cliente-reviews-slick cliente-reviews-slick5">
                    <?php foreach ($yandex_map as $item): ?>
                    <div class="cliente-reviews-slick__item">
                        <div class="cliente-reviews-slick__item_wrapper">
                            <div class="row-45  rectangle-2336-3__wrapper">
                                <div class="rectangle-2336-3"></div>
                                <div class="col-61">
                                    <p class="vasilii-3"><?= $item['name']?></p>
                                    <p class="text-94"><?= $item['date']?></p>
                                </div>
                                <div class="review__rating"><img src="/images/5-star-rating.png"><p class="text-95">5.0</p></div>
                            </div>
                            <p class="text-96">
                                <?= mb_substr($item['text'], 0, 250)?>...
                            </p>
                            <p class="text-97"><a href="<?= $item['link']?>">Отзыв из Яндекс.Карты</a></p>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>