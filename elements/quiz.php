<section class="quiz">
    <div class="container">
        <div class="quiz_wrapper">
            <div class="">
                <form class="quiz_form ajax_form" method="post" id="quiz_form">
                    <div class="quiz-slide row quiz-slide-1 quiz-slide-active">
                        <div class="quiz_header flex">
                            <div class="quiz_header-title col-md-8">
                                Выберите модель вашего BMW
                            </div>
                            <div class="quiz_header-step col-md-4 flex">
                                <span class="quiz_steps">Шаг 1 из 4</span>
                                <div class="step__extender">
                                    <div class="step__extender-item step__extender-item_active"></div>
                                    <div class="step__extender-item"></div>
                                    <div class="step__extender-item"></div>
                                    <div class="step__extender-item"></div>
                                </div>
                            </div>
                        </div>
                        <div class="quiz_content">
                            <div class="quiz_content-main col-md-9">
                                <div class="quiz-slider">
                                    <?php
                                    $quizCars = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
                                    foreach($quizCars as $id) {
                                        echo '<div class="caption quiz-thumbnail" data-id="{$id}">
                                            <img src="images/model.png" alt="BMW" />
                                            <div class="h3"><span>BMW</span></div>
                                            <div class="quiz-model-desc-info">Е82<span>|</span>Е87<span>|</span>F20</div>
                                        </div>';
                                     } ?>

                                </div>
                            </div>
                            <div class="quiz_content-push col-md-3">
                                <div class="quiz-select-model-wrapper">
                                    <img class="main-mechanic-master" src="images/pngegg_17_3.png" alt="" width="108" height="136">
                                    <div class="main-mechanic">
                                        <p class="name">Александр</p>
                                        <p class="character">Специалист ПИК</p>
                                    </div>
                                    <div class="quiz-bonus">
                                        <img class="quiz-bonus-wing-1" src="images/pngwing_24.png" alt="" width="29" height="29">
                                        <div class="quiz-bonus-info">
                                            Обслуживаться<br>в Автоцентре ПИК выгодно, <br>Вы получаете бонусы и скидки!
                                        </div>
                                        <img class="quiz-bonus-wing-2" src="images/pngwing_21.png" alt="" width="52" height="56">
                                        <img class="quiz-bonus-wing-3" src="images/pngwing_23.png" alt="" width="29" height="30">
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