<div class="header-slider">
    <div class="bg-holder-2">
        <div class="container">
            <!--<div class="col-left col-md-6">-->
            <div class="col-md-6">
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

            <div class="col-right col-md-6 d-none d-md-block">
                <div class="ellipse"></div>
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