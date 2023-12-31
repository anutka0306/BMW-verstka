<div class="header-slider">
    <div class="bg-holder-video video-container">
        <video autoplay muted loop>
            <source src="/images/video/bmw.mp4" type="video/mp4" />
        </video>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                <div class="title-page">Ремонт <span class="title-page-blue">БМВ</span></div>
                <div class="title-page-desc">
                    <div class="title-slog tpd-slog-left">Сервис БМВ</div>
                    <div class="separator"></div>
                    <div class="title-slog tpd-slog-right">Диагностика БМВ - <span class="color1c69d4">Бесплатно</span></div>
                </div>
                <div class="diagnostic-device-analytics-update-imac">
                    <div class="item">
                        <div class="icon">
                            <img src="images/diagnostic.svg" alt="" width="24" height="26" />
                        </div>
                        <div class="text">Диагностика подвески<br /><strong class="text-style">бесплатно</strong></div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="images/comp-diagnostic.svg" alt="" width="26" height="22" />
                        </div>
                        <div class="text">Компьютерная<br />диагностика <strong class="text-style">499р.</strong></div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="images/po-errors.svg" alt="" width="26" height="26" />
                        </div>
                        <div class="text">Обновление ПО, исправление ошибок, активация скрытых функций</div>
                    </div>
                </div>
                <div class="btn-hover-holder-wrapper">
                    <button type="button" class="btn-hover-holder" data-bs-toggle="modal" data-bs-target="#recordNowModal">
                        ЗАПИСАТЬСЯ СЕЙЧАС
                    </button>
                </div>
                <?php
                include 'modals/record-now.php';
                ?>

            </div>

                <div class="col-md-6 d-none d-md-flex align-items-start justify-content-center">
                <div class="header__form mt-5">
                    <h3>запишитесь</h3>
                    <form action="">
                        <input type="text" name="name" class="mt-5 form-control" placeholder="Ваше Имя">
                        <input type="tel" name="phone" class="form-control mt-3" placeholder="Введите телефон">
                        <select name="address" class="form-control mt-3" id="address">
                            <option disabled selected>Выберите адрес</option>
                            <option value="b116">ул. Боровая 116</option>
                            <option value="k20">Кушелевская дорога 20</option>
                            <option value="to12">Дор. на Турухтанные Острова 12</option>
                        </select>
                        <div class="checkbox__wrapper mt-5">
                        <input type="checkbox" class="form-check-input" value="1"> Я даю согласие на обработку персональных данных
                        </div>
                        <button class="btn-primary mt-3" type="submit">ОТПРАВИТЬ ЗАЯВКУ</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="select-model">
        <!--<div class="l-constrained-10">-->
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="select-wrapper">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-select" for="inputGroupSelectSeria">1</label>
                        </div>
                        <select class="select-seria" id="inputGroupSelectSeria">
                            <option>Выберите серию</option>
                        </select>
                    </div>
                </div>
                <div class="select-wrapper">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-select" for="inputGroupSelectKuzov">2</label>
                        </div>
                        <select class="select-seria" id="inputGroupSelectKuzov">
                            <option>Выберите кузов</option>
                        </select>
                    </div>
                </div>
                <button class="btn-primary" style="height: 48px;">
                    ВЫБРАТЬ
                </button>
            </div>
        </div>
    </div>
</div>