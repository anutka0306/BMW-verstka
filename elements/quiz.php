<?php
$cars = array(
    0 => array('id' => 1, 'title' => 'BMW 1', 'image' => '/images/quiz/cars/bmw-1.png'),
    1 => array('id' => 2, 'title' => 'BMW 2', 'image' => '/images/quiz/cars/bmw-2.png'),
    2 => array('id' => 3, 'title' => 'BMW 3', 'image' => '/images/quiz/cars/bmw-3.png'),
    3 => array('id' => 4, 'title' => 'BMW 4', 'image' => '/images/quiz/cars/bmw-4.png'),
    4 => array('id' => 5, 'title' => 'BMW 5', 'image' => '/images/quiz/cars/bmw-5.png'),
    5 => array('id' => 6, 'title' => 'BMW 6', 'image' => '/images/quiz/cars/bmw-6.png'),
    6 => array('id' => 7, 'title' => 'BMW 7', 'image' => '/images/quiz/cars/bmw-7.png'),
    7 => array('id' => 8, 'title' => 'BMW 8', 'image' => '/images/quiz/cars/bmw-8.png'),
    8 => array('id' => 9, 'title' => 'BMW i8', 'image' => '/images/quiz/cars/bmw-i8.png'),
    9 => array('id' => 10, 'title' => 'BMW X1', 'image' => '/images/quiz/cars/bmw-x1.png'),
    10 => array('id' => 11, 'title' => 'BMW X2', 'image' => '/images/quiz/cars/bmw-x2.png'),
    11 => array('id' => 12, 'title' => 'BMW X3', 'image' => '/images/quiz/cars/bmw-x3.png'),
);
?>
<section class="quiz">
    <div class="container">
        <div class="quiz_wrapper">
            <div class="">
                <form class="quiz_form ajax_form" id="quiz_form">
                    <div class="quiz-slide row quiz-slide-1 quiz-slide-active">
                        <div class="quiz_header">
                            <div class="quiz_header-title col-md-9">
                                Выберите модель вашего BMW
                            </div>
                        </div>
                        <div class="quiz_content">
                            <div class="quiz_content-main col-md-9">
                                <div class="quiz-slider">
                                    <?php foreach($cars as $car):?>
                                        <div class="caption quiz-thumbnail" data-id="<?= $car['id']?>">
                                            <img src="<?= $car['image']?>" alt="<?= $car['title']?>" />
                                            <div class="h3"><span><?= $car['title']?></span></div>
                                            <!--<div class="quiz-model-desc-info">Е82<span>|</span>Е87<span>|</span>F20</div>-->
                                        </div>
                                     <?php endforeach;?>

                                </div>
                            </div>
                            <div class="quiz_content-push col-md-3">
                                <div class="quiz-select-model-wrapper">
                                    <img class="main-mechanic-master" src="/images/director-foto1.png" alt="" width="161">
                                    <div class="main-mechanic">
                                        <p class="name">Константин Олегович</p>
                                        <p class="character">Руководитель</p>
                                    </div>
                                    <div class="quiz-bonus">
                                        <img class="quiz-bonus-wing-1" src="/images/pngwing_24.png" alt="" width="29" height="29">
                                        <div class="quiz-bonus-info">
                                            Обслуживаться<br>в Автоцентре ПИК выгодно, <br>Вы получаете бонусы и скидки!
                                        </div>
                                        <img class="quiz-bonus-wing-2" src="/images/pngwing_21.png" alt="" width="52" height="56">
                                        <img class="quiz-bonus-wing-3" src="/images/pngwing_23.png" alt="" width="29" height="30">
                                    </div>
                                    <div class="content-push-footer">
                                        <button class="btn">ДАЛЕЕ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- остальные пункты взять с bmwpikspb.ru -->
                </form>
            </div>
        </div>
    </div>
</section>