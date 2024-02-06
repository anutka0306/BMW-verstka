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

<section class="quiz1">
    <div class="container">
        <div class="quiz_wrapper">
            <div class="">
                <form class="quiz_form ajax_form" method="post" id="quiz_form">
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
                    <select class="quiz_select-field quiz_select-model  quizselect" name="model"
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
                        <div class="caption quiz-thumbnail" data-id="<?=$car['id']?>">
                            <img src="<?=$car['image']?>" alt="BMW" />
                            <div class="h3"><span><?=$car['title']?></span></div>
                            <!--<div class="quiz-model-desc-info">Е82<span>|</span>Е87<span>|</span>F20</div>-->
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="quiz_content-push col-md-3">
                <div class="content-push-header">
                    <img src="images/quiz/WhatsApp_Image.png" alt="Директор" class="director_pic">
                    <h3>Константин Олегович</h3>
                    <span class="quiz-slide-1_dolzhnost">руководитель</span>
                    <span class="quiz-slide-1_header-descr">Обслуживаться в Автоцентре ПИК выгодно, Вы получаете
                        бонусы и скидки!</span>
                </div>
                <div class="content-push-main">
                    <img src="images/quiz/MAGAZINE.png" alt="" class="content-push-image">
                </div>
                <div class="content-push-footer">
                    <a href="#" class="quiz_button quiz_button-1" onclick="yaCounter56306008.reachGoal('next'); return true;">далее</a>
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
                    <select class="quiz_select-field quiz_select-abs" name="cabin">
                        {$_modx->runSnippet("pdoResources",[
                        'select' => 'id,pagetitle',
                        'parents' => 160,
                        'tpl' => '@INLINE <option value="{$pagetitle}" data-src="{$id}">{$pagetitle}</option>',
                        'limit' => 0,
                        'depth' => 0,
                        'sortby' => 'pagetitle',
                        'sortdir' => 'ASC'
                        ])}
                    </select>

                </div>
                <div class="quiz-content quiz_select-cabin quiz_select-items">
                    {$_modx->runSnippet("pdoResources",[
                    'parents' => '159',
                    'depth' => '0',
                    'limit' => '0',
                    'tpl' => 'quiz_tpl',
                    'sortdir' => 'ASC',
                    'includeTVs' => 'img',
                    'tvPrefix' => ''
                    ])}
                </div>
                <div class="button-wrapper">
                    <a href="#" class="quiz_button quiz_button-2">далее</a></div>
            </div>
            <div class="quiz_content-push col-md-3">
                <div class="content-push-header">
                    <img src="images/quiz/WhatsApp_Image.png" alt="Директор" class="director_pic">
                    <h3>Константин Олегович</h3>
                    <span class="quiz-slide-1_dolzhnost">руководитель</span>
                    <span class="quiz-slide-1_header-descr">БЕСПЛАТНАЯ компьютерная диагностика при первом
                        обращение!</span>
                </div>
                <div class="content-push-main">
                    <img src="images/quiz/enjine.png" alt="" class="content-push-image">
                    <span class="slide-2_bonusy">Гарантированные бонусы!</span>
                </div>
                <div class="content-push-footer">
                    <a href="#" class="quiz_button quiz_button-2">далее</a>
                </div>
            </div>
        </div>
    </div>
    <div class="quiz-slide row quiz-slide-3">
        <div class="quiz_header flex">
            <div class="quiz_header-title col-md-6 .d-sm-none .d-md-block">
                <h3>{$_modx->resource.quiz_header3}</h3>
            </div>
            <div>
                <h3 class="hidden-header">{$_modx->resource.quiz_header3}</h3>
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
                <div class="quiz-content">
                    <div class="col-md-6 quiz-slide-3_column">

                        <h3 class="choose_sevrices">выберите вид работ</h3>
                        <ul class="unstyled centered">
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox"
                                       value="{$_modx->resource.work_list1}" name="services_checkbox[]">
                                <label for="styled-checkbox-1"
                                       [[!+fi.services_checkbox:FormItIsChecked=`{$_modx->resource.work_list1}`]]><span
                                        class="work_list">{$_modx->resource.work_list1}</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox"
                                       value="{$_modx->resource.work_list2}" name="services_checkbox[]">
                                <label for="styled-checkbox-2"
                                       [[!+fi.services_checkbox:FormItIsChecked=`{$_modx->resource.work_list2}`]]><span
                                        class="work_list">{$_modx->resource.work_list2}</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-3" type="checkbox"
                                       value="{$_modx->resource.work_list3}" name="services_checkbox[]">
                                <label for="styled-checkbox-3"
                                       [[!+fi.services_checkbox:FormItIsChecked=`{$_modx->resource.work_list3}`]]><span
                                        class="work_list">{$_modx->resource.work_list3}</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-4" type="checkbox"
                                       value="{$_modx->resource.work_list4}" name="services_checkbox[]">
                                <label for="styled-checkbox-4"
                                       [[!+fi.services_checkbox:FormItIsChecked=`{$_modx->resource.work_list4}`]]><span
                                        class="work_list">{$_modx->resource.work_list4}</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-5" type="checkbox"
                                       value="{$_modx->resource.work_list5}" name="services_checkbox[]">
                                <label for="styled-checkbox-5"
                                       [[!+fi.services_checkbox:FormItIsChecked=`{$_modx->resource.work_list5}`]]><span
                                        class="work_list">{$_modx->resource.work_list5}</span></label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 quiz-slide-3_column">
                        <ul class="unstyled centered">
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-6" type="checkbox"
                                       value="{$_modx->resource.work_list6}" name="services_checkbox[]">
                                <label for="styled-checkbox-6"
                                       [[!+fi.services_checkbox:FormItIsChecked=`{$_modx->resource.work_list6}`]]><span
                                        class="work_list">{$_modx->resource.work_list6}</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-7" type="checkbox"
                                       value="{$_modx->resource.work_list7}" name="services_checkbox[]">
                                <label for="styled-checkbox-7"
                                       [[!+fi.services_checkbox:FormItIsChecked=`{$_modx->resource.work_list7}`]]><span>{$_modx->resource.work_list7}</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-8" type="checkbox"
                                       value="{$_modx->resource.work_list8}" name="services_checkbox[]">
                                <label for="styled-checkbox-8"
                                       [[!+fi.services_checkbox:FormItIsChecked=`{$_modx->resource.work_list8}`]]><span
                                        class="work_list">{$_modx->resource.work_list8}</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-9" type="checkbox"
                                       value="{$_modx->resource.work_list9}" name="services_checkbox[]">
                                <label for="styled-checkbox-9"
                                       [[!+fi.services_checkbox:FormItIsChecked=`{$_modx->resource.work_list9}`]]><span
                                        class="work_list">{$_modx->resource.work_list9}</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-10" type="checkbox"
                                       value="{$_modx->resource.work_list10}" name="services_checkbox[]">
                                <label for="styled-checkbox-10"
                                       [[!+fi.services_checkbox:FormItIsChecked=`{$_modx->resource.work_list10}`]]><span
                                        class="work_list">{$_modx->resource.work_list10}</span></label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 quiz-slide-3_text-container">
                        <label for="quiz_textarea" class="slide-3_textarea-label">Или укажите самостоятельно:
                            <textarea name="comment" id="quiz_textarea" cols="30" rows="5"></textarea></label>
                    </div>
                </div>
                <div class="quiz_mobile-wrapper"><a href="#"
                                                    class="quiz_button quiz_button-3 quiz_mobile-button">далее</a></div>
            </div>
            <div class="quiz_content-push col-md-3">
                <div class="content-push-header">
                </div>
                <div class="content-push-main">
                    <div class="push_description">
                        <h3>бесплатная</h3>
                        <span>диагностика<br> подвески</span>
                    </div>
                    <img src="images/quiz/man.png" alt="" class="content-push-image">
                    <img src="images/quiz/mob-man.png" alt="" class=" mob-man-image">
                </div>
                <div class="content-push-footer">
                    <a href="#" class="quiz_button quiz_button-3">далее</a>
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
                    <div class="col-md-12  col-12 ">

                        <div class="push_description d-none d-sm-block d-md-none">
                            <p>Выберите адрес</p>
                            <p>+ Бесплатная <br> диагностика подвески</p>
                            <p>+ Бесплатная <br>компьютерная диагностика</p>

                        </div>
                    </div>
                    <div class="col-md-12 quiz-adress_col">


                        <div class="inputGroupContainer AdressInputGroup">
                            <div class="input-group col-md-6">
                                <div class="adress_item">
                                    <label class="adress_label adress_kush">
                                        <img src="/img/cont1.jpg" alt="">
                                        <input class="styled-checkbox adress_radio" id="styled-checkbox-357" type="radio" value="Кушелевская 20" name="adress_radio">
                                        <div class="adress_text-group">
                                            <p class="adress_item-text">Санкт-Петербург<br> Кушелевская дорога 20</p>
                                            <p class="adress_item-text">917-51-16</p>
                                        </div>
                                    </label>
                                </div>
                                <div class="adress_item">
                                    <label class="adress_label adress_bor">
                                        <img src="/img/cont-2.jpg" alt="">
                                        <input class="styled-checkbox adress_radio" id="styled-checkbox-358" type="radio" value="Боровая 116" name="adress_radio">
                                        <div class="adress_text-group">
                                            <p class="adress_item-text">Санкт-Петербург<br> ул. Боровая 116</p>
                                            <p class="adress_item-text">8 (812) 932-69-61</p>
                                        </div>
                                    </label>
                                </div>
                                <div class="adress_item">
                                    <label class="adress_label adress_tur">
                                        <img src="/img/cont-3.png" alt="">
                                        <input class="styled-checkbox adress_radio" id="styled-checkbox-359" type="radio" value="СПБ4" name="adress_radio">
                                        <div class="adress_text-group">
                                            <p class="adress_item-text">Санкт-Петербург<br> дорога на Турухтанные Острова, 12</p>
                                            <p class="adress_item-text">8 (812) 945-75-86</p>
                                        </div>
                                    </label>
                                </div>
                                <div class="adress_item activea">
                                    <label class="adress_label activea">
                                        <input class="styled-checkbox adress_radio" type="radio" value="Любой" name="adress_radio" checked="checked">
                                        <div class="adress_text-group">
                                            <p class="adress_item-text">Санкт-Петербург</p>
                                            <p class="adress_item-text">Любой филиал</p>
                                        </div>
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="ymap-container">

                                    <div class="loader loader-default"></div>
                                    <div id="map-yandex"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="quiz-slide-4-footer">
                </div>
            </div>
            <div class="quiz_content-push col-md-3">
                <div class="content-push-header">
                    <img src="images/quiz/WhatsApp_Image.png" alt="Директор" class="director_pic">
                </div>
                <div class="content-push-main">
                    <div class="push_description">
                        <p>+ <br> Бесплатная <br> диагностика <br>подвески</p>
                        <p>+ <br>Бесплатная <br>компьютерная <br>диагностика</p>
                    </div>
                    <!--  <img src="images/quiz/evakuator.png" alt="" class="content-push-image">-->
                </div>
                <div class="content-push-footer">
                    <div class=""><a href="#" class="quiz_button quiz_button-4 ">далее</a></div>
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
            <div class="quiz_content-main col-md-9">
                [[-<div class="quiz-title-container">
                    <h3 class="sub_header-title d-sm-none d-md-block">Расчет стоимости сформирован!</h3>
                </div>]]
                <div class="quiz-content-group col-md-12">
                    <div class="col-md-5  col-12 slide-4-img_wrapper">
                        <img src="images/quiz/phone.png" alt="">
                        <div class="push_description d-none d-sm-block d-md-none">
                            <p>Расчет сфоримрован!</p>
                            <p>+ Бесплатная <br> диагностика подвески</p>
                            <p>+ Бесплатная <br>компьютерная диагностика</p>

                        </div>
                    </div>
                    <div class="col-md-7 checkboxes-container ">
                        [[-<h3>куда прислать расчет</h3>
                        <ul class="unstyled centered">
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-11" type="checkbox"
                                       value="WhatsApp" name="where_to_send[]"
                                       [[!+fi.where_to_send:FormItIsChecked=`WhatsApp`]]>
                                <label for="styled-checkbox-11"><span>Пришлите мне цену и PDF в WhatsApp</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-12" type="checkbox"
                                       value="Viber" name="where_to_send[]"
                                       [[!+fi.where_to_send:FormItIsChecked=`Viber`]]>
                                <label for="styled-checkbox-12"><span>Пришлите мне цену и PDF в Viber</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-13" type="checkbox"
                                       value="Пришлите цену в СМС" name="where_to_send[]"
                                       [[!+fi.where_to_send:FormItIsChecked=`Пришлите цену в СМС`]]>
                                <label for="styled-checkbox-13"><span>Вышлите мне СМС со стоимостью</span></label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="styled-checkbox-14" type="checkbox"
                                       value="Перезвоните мне" name="where_to_send[]"
                                       [[!+fi.where_to_send:FormItIsChecked=`Перезвоните мне`]]>
                                <label for="styled-checkbox-14"><span>Перезвоните мне, у меня остались вопросы</span></label>
                            </li>
                        </ul>]]
                        <div class="col-md-8 inputGroupContainer inputGroupContainer-top">
                            <div class="input-group">
                                <span class="input-group-addon"><i
                                        class="glyphicon glyphicon-earphone"></i></span>
                                <span class="slide-4-lable">Введите Ваш номер</span>
                                <label class="input">
                                    <input name="phone" class="form-control" type="tel" required>
                                    <span class="input_mask1">Телефон</span>
                                </label><input class="fr-name" type="text" name="first-name"
                                               value=""> <input class="fr-name" type="text" name="form-name" value="Квиз">
                                <button onclick="yaCounter56306008.reachGoal('knopka2'); return true;"
                                        type="submit" class="quiz_submit"><img src="/img/magazinebutton.png"
                                                                               class="input-image">Получить расчет</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="quiz-slide-4-footer">
                </div>
            </div>
            <div class="quiz_content-push col-md-3">
                <div class="content-push-header">
                    <img src="images/quiz/WhatsApp_Image.png" alt="Директор" class="director_pic">
                </div>
                <div class="content-push-main">
                    <div class="push_description">
                        <p>+ <br> Бесплатная <br> диагностика <br>подвески</p>
                        <p>+ <br>Бесплатная <br>компьютерная <br>диагностика</p>
                    </div>
                    <img src="images/quiz/evakuator.png" alt="" class="content-push-image">
                </div>
                <div class="content-push-footer">
                </div>
            </div>
        </div>
    </div>
</form>
            </div>
        </div>
    </div>
</section>
