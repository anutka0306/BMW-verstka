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
        12 => array('id' => 13, 'title' => 'BMW X4', 'image' => '/images/quiz/cars/bmw-x4.png'),
        13 => array('id' => 14, 'title' => 'BMW X5', 'image' => '/images/quiz/cars/bmw-x5.png'),
        14 => array('id' => 15, 'title' => 'BMW X6', 'image' => '/images/quiz/cars/bmw-x6.png'),
        15 => array('id' => 16, 'title' => 'BMW X7', 'image' => '/images/quiz/cars/bmw-x7.png'),
        16 => array('id' => 17, 'title' => 'BMW G07 (2019 -н.в.)', 'image' => '/images/quiz/cars/g07.png'),
    );
?>

<section class="quiz1">
    <div class="container">
        <div class="quiz_wrapper">
            <div class="">
                <form class="quiz_form ajax_form" id="quiz_form">
    <div class="quiz-slide row quiz-slide-1 quiz-slide-active">
        <div class="quiz_header flex">
            <div class="quiz_header-title col-md-6 .d-sm-none .d-md-block">
                <h3>Выберите модель БМВ:</h3>
            </div>
            <div>
                <h3 class="hidden-header">Выберите модель БМВ:</h3>
            </div>
            <div class="quiz_header-step col-md-6 flex col-12 ">
                <span class="quiz_steps">Шаг 1 из 5</span>
                <div class="step__extender">
                    <div class="step__extender-item step__extender-item_active "></div>
                    <div class="step__extender-item "></div>
                    <div class="step__extender-item"></div>
                    <div class="step__extender-item"></div>
                    <div class="step__extender-item"></div>
                </div>
            </div>
        </div>
        <div class="quiz_content">
            <div class="quiz_content-main col-md-9">
                <div class="quiz_selec-wrapper">
                    <select class="quiz_select-field quiz_select-model form-select  quizselect" name="model"
                            data-target=".quiz_select-cabin" id="quiz-selectcabin-id">
                        <?php foreach ($cars as $car): ?>
                            <option value="<?= $car['title']?>" data-src="<?=$car['id']?>"><?= $car['title']?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="quiz-slider">
                    <?php foreach ($cars as $car): ?>
                        <!--<div class="caption quiz-thumbnail" data-id="{$id}">
                            <img style="width: 160px;height:90px;" src="<?/*= $car['image']*/?>" alt="<?/*= $car['title']*/?>" />
                            <div title="<?/*= $car['title']*/?>" style="margin-top: 5px; font-size: 16px; text-align: center;" class="h3"><span><?/*= $car['title']*/?></span></div>
                        </div>-->
                        <div class="caption quiz-thumbnail quiz-thumbnail-model" data-id="<?=$car['id']?>">
                            <img src="<?=$car['image']?>" alt="BMW" />
                            <div class="h3"><span><?=$car['title']?></span></div>
                            <!--<div class="quiz-model-desc-info">Е82<span>|</span>Е87<span>|</span>F20</div>-->
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="quiz_content-push col-md-3">
                <div class="quiz-select-model-wrapper">
                    <img class="main-mechanic-master" src="images/director-foto1.png" alt="" width="161">
                    <div class="main-mechanic">
                        <p class="name">Константин Олегович</p>
                        <p class="character">Руководитель</p>
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
                        <button class="btn-primary quiz_button quiz_button-1" style="width: 100%;">Далее</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="quiz-slide row quiz-slide-2">
        <div class="quiz_header flex">
            <div class="quiz_header-title col-md-6 .d-sm-none .d-md-block">
                <h3>Выберите кузов БМВ:</h3>
            </div>
            <div>
                <h3 class="hidden-header">Выберите кузов БМВ:</h3>
            </div>
            <div class="quiz_header-step col-md-6 flex col-12 ">
                <span class="quiz_steps">Шаг 2 из 5</span>
                <div class="step__extender">
                    <div class="step__extender-item item_passed-anim step__extender-item_passed "></div>
                    <div class="step__extender-item  step__extender-item_active"></div>
                    <div class="step__extender-item"></div>
                    <div class="step__extender-item"></div>
                    <div class="step__extender-item"></div>
                </div>
            </div>
        </div>
        <div class="quiz_content">
            <div class="quiz_content-main col-md-9">
                <div class="quiz_select-lable-wrapper">
                    <select class="quiz_select-field quiz_select-abs form-select" name="cabin">

                    </select>

                </div>
                <div class="quiz-content quiz_select-cabin quiz_select-items">

                </div>
                <div class="button-wrapper">
                    <a href="#" class="quiz_button quiz_button-2">далее</a></div>
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
                            <button class="btn-primary quiz_button quiz_button-1" style="width: 100%;">Далее</button>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <div class="quiz-slide row quiz-slide-3">
        <div class="quiz_header flex">
            <div class="quiz_header-title col-md-6 .d-sm-none .d-md-block">
                <h3>ВЫБЕРИТЕ ВИД РАБОТ</h3>
            </div>

            <div class="quiz_header-step col-md-6 flex col-12 ">
                <span class="quiz_steps">Шаг 3 из 5</span>
                <div class="step__extender">
                    <div class="step__extender-item   step__extender-item_passed"></div>
                    <div class="step__extender-item  item_passed-anim step__extender-item_passed"></div>
                    <div class="step__extender-item step__extender-item_active"></div>
                    <div class="step__extender-item"></div>
                    <div class="step__extender-item"></div>
                </div>
            </div>
        </div>
        <div class="quiz_content">
            <div class="quiz_content-main col-md-9">
                <div class="quiz-content container">
                    <div class="row">
                    <div class="col-md-6 quiz-slide-3_column">

                        <h3 class="choose_sevrices">выберите вид работ</h3>
                        <ul class="unstyled centered">
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox"
                                       value="ТО (Техническое обслуживание)" name="services_checkbox[]">
                                <label for="styled-checkbox-1"><span
                                        class="work_list">ТО (Техническое обслуживание)</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox"
                                       value="Диагностика" name="services_checkbox[]">
                                <label for="styled-checkbox-2"><span
                                        class="work_list">Диагностика</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-3" type="checkbox"
                                       value="Замена масла" name="services_checkbox[]">
                                <label for="styled-checkbox-3"><span
                                        class="work_list">Замена масла</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-4" type="checkbox"
                                       value="Ремонт двигателя" name="services_checkbox[]">
                                <label for="styled-checkbox-4"><span
                                        class="work_list">Ремонт двигателя</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-5" type="checkbox"
                                       value="Ремонт подвески" name="services_checkbox[]">
                                <label for="styled-checkbox-5"><span
                                        class="work_list">Ремонт подвески</span></label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 quiz-slide-3_column">
                        <ul class="unstyled centered">
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-6" type="checkbox"
                                       value="Замена цепи ГРМ" name="services_checkbox[]">
                                <label for="styled-checkbox-6"><span
                                        class="work_list">Замена цепи ГРМ</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-7" type="checkbox"
                                       value="Шиномонтаж" name="services_checkbox[]">
                                <label for="styled-checkbox-7"><span>Шиномонтаж</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-8" type="checkbox"
                                       value="Тюнинг" name="services_checkbox[]">
                                <label for="styled-checkbox-8"><span
                                        class="work_list">Тюнинг</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-9" type="checkbox"
                                       value="Запчасти" name="services_checkbox[]">
                                <label for="styled-checkbox-9"><span
                                        class="work_list">Запчасти</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-10" type="checkbox"
                                       value="другое" name="services_checkbox[]">
                                <label for="styled-checkbox-10"><span
                                        class="work_list">другое</span></label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 quiz-slide-3_text-container">
                        <label for="quiz_textarea" class="slide-3_textarea-label">Или укажите самостоятельно:
                            <textarea name="comment" id="quiz_textarea" cols="30" rows="5"></textarea></label>
                    </div>
                </div>
                </div>
                <div class="quiz_mobile-wrapper"><a href="#"
                                                    class="quiz_button quiz_button-3 quiz_mobile-button">далее</a></div>
            </div>
            <div class="quiz_content-push col-md-3">
                <div class="quiz-select-model-wrapper">
                    <img class="main-mechanic-master" src="images/director-foto1.png" alt="" width="161">
                    <div class="main-mechanic">
                        <p class="name">Константин Олегович</p>
                        <p class="character">Руководитель</p>
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
                            <button class="btn-primary quiz_button quiz_button-1" style="width: 100%;">Далее</button>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <div class="quiz-slide row quiz-slide-4">
        <div class="quiz_header flex">
            <div class="quiz_header-title col-md-6 .d-sm-none .d-md-block">
                <h3>Адреса сервисов</h3>
            </div>
            <div>
                <h3 class="hidden-header">Выберите адрес</h3>
            </div>
            <div class="quiz_header-step col-md-6 flex col-12 ">
                <span class="quiz_steps">Шаг 4 из 5</span>
                <div class="step__extender">
                    <div class="step__extender-item step__extender-item_passed "></div>
                    <div class="step__extender-item  step__extender-item_passed"></div>
                    <div class="step__extender-item item_passed-anim step__extender-item_passed">
                    </div>
                    <div class="step__extender-item step__extender-item_active"></div>
                    <div class="step__extender-item"></div>
                </div>
            </div>
        </div>
        <div class="quiz_content">
            <div class="quiz_content-main col-md-9">
                <div class="quiz-title-container">
                    <h3 class="sub_header-title d-sm-none d-md-block">Выберите адрес</h3>
                </div>
                <div class="quiz-content-group col-md-12">
                    <div class="col-md-12 quiz-adress_col">
                        <ul class="unstyled centered">
                            <li class="d-flex">
                                <input class="adress_radio" id="styled-checkbox-357" type="radio" value="k20" name="adress_radio">
                                <label for="styled-checkbox-1" class="ms-3"><span
                                            class="work_list">Санкт-Петербург - Кушелевская дорога 20<br>917-51-16</span></label>
                            </li>
                            <li class="d-flex">
                                <input class="adress_radio" id="styled-checkbox-357" type="radio" value="b116" name="adress_radio">
                                <label for="styled-checkbox-1" class="ms-3"><span
                                            class="work_list">Санкт-Петербург - ул. Боровая 116<br>8 (812) 932-69-61</span></label>
                            </li>
                            <li class="d-flex">
                                <input class="adress_radio" id="styled-checkbox-357" type="radio" value="to12" name="adress_radio">
                                <label for="styled-checkbox-1" class="ms-3"><span
                                            class="work_list">Санкт-Петербург - дорога на Турухтанные Острова, 12<br>8 (812) 945-75-86</span></label>
                            </li>
                            <li class="d-flex">
                                <input class="adress_radio" id="styled-checkbox-357" type="radio" value="any" name="adress_radio">
                                <label for="styled-checkbox-1" class="ms-3"><span
                                            class="work_list">Санкт-Петербург - Любой филиал</span></label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="quiz_content-push col-md-3">
                <div class="quiz-select-model-wrapper">
                    <img class="main-mechanic-master" src="images/director-foto1.png" alt="" width="161">
                    <div class="main-mechanic">
                        <p class="name">Константин Олегович</p>
                        <p class="character">Руководитель</p>
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
                            <button class="btn-primary quiz_button quiz_button-1" style="width: 100%;">Далее</button>
                        </div>

                </div>
            </div>
        </div>

    </div>
    <div class="quiz-slide row quiz-slide-5">
        <div class="quiz_header flex">
            <div class="quiz_header-title col-md-6 .d-sm-none .d-md-block">
                <h3>Расчет сформирован</h3>
            </div>
            <div>
                <h3 class="hidden-header">Расчет сформирован</h3>
            </div>
            <div class="quiz_header-step col-md-6 flex col-12 ">
                <span class="quiz_steps">Шаг 5 из 5</span>
                <div class="step__extender">
                    <div class="step__extender-item step__extender-item_passed "></div>
                    <div class="step__extender-item  step__extender-item_passed"></div>
                    <div class="step__extender-item  step__extender-item_passed"></div>
                    <div class="step__extender-item item_passed-anim step__extender-item_passed"></div>
                    <div class="step__extender-item step__extender-item_active"></div>
                </div>
            </div>
        </div>
        <div class="quiz_content">
            <div class="container">
                <div class="row">
                    <div class="quiz_content-main col-md-9">
                        <div class="quiz-content-group col-md-12 d-flex">
                            <div class="col-md-5  col-12 slide-4-img_wrapper">
                                <img src="/images/quiz/phone.png" alt="" style="margin-left: 0;">
                                <div class="push_description d-none d-sm-block d-md-none">
                                    <p>Расчет сфоримрован!</p>
                                    <p>+ Бесплатная <br> диагностика подвески</p>
                                    <p>+ Бесплатная <br>компьютерная диагностика</p>

                                </div>
                            </div>
                            <div class="col-md-7 checkboxes-container ">
                                <h3>куда прислать расчет</h3>
                                <ul class="unstyled centered">
                                    <li>
                                        <input class="styled-checkbox" id="styled-checkbox-11" type="checkbox"
                                               value="WhatsApp" name="where_to_send[]">
                                        <label for="styled-checkbox-11"><span>Пришлите мне цену и PDF в WhatsApp</span></label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="styled-checkbox-12" type="checkbox"
                                               value="Viber" name="where_to_send[]">
                                        <label for="styled-checkbox-12"><span>Пришлите мне цену и PDF в Viber</span></label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="styled-checkbox-13" type="checkbox"
                                               value="Пришлите цену в СМС" name="where_to_send[]">
                                        <label for="styled-checkbox-13"><span>Вышлите мне СМС со стоимостью</span></label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="styled-checkbox-14" type="checkbox"
                                               value="Перезвоните мне" name="where_to_send[]">
                                        <label for="styled-checkbox-14"><span>Перезвоните мне, у меня остались вопросы</span></label>
                                    </li>
                                </ul>
                                <div class="col-md-8 inputGroupContainer inputGroupContainer-top">
                                    <div>
                                <span class="input-group-addon"><i
                                            class="glyphicon glyphicon-earphone"></i></span>
                                        <span class="slide-4-lable d-block">Введите Ваш номер</span>

                                            <input name="phone" class="form-control" type="tel" required>

                                        <button type="button" id="quiz_submit" class="btn-primary mt-3 mb-3">Получить расчет</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quiz_content-push col-md-3">
                        <div class="quiz-select-model-wrapper">
                            <img class="main-mechanic-master" src="images/director-foto1.png" alt="" width="161">
                            <div class="main-mechanic">
                                <p class="name">Константин Олегович</p>
                                <p class="character">Руководитель</p>
                            </div>
                            <div class="quiz-bonus">
                                <img class="quiz-bonus-wing-1" src="images/pngwing_24.png" alt="" width="29" height="29">
                                <div class="quiz-bonus-info">
                                    Обслуживаться<br>в Автоцентре ПИК выгодно, <br>Вы получаете бонусы и скидки!
                                </div>
                                <img class="quiz-bonus-wing-2" src="images/pngwing_21.png" alt="" width="52" height="56">
                                <img class="quiz-bonus-wing-3" src="images/pngwing_23.png" alt="" width="29" height="30">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
            </div>
        </div>
    </div>
</section>

<script>
    $("#quiz_submit").click(function () {
        $.ajax({
            url: '/send_quiz_form.php',
            method: 'post',
            dataType: 'html',
            data: $("#quiz_form").serialize(),
            success: function(data){
                alert(data);
            }
        });
    });

</script>
