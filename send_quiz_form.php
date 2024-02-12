<?php

$errors = array();
$addr = '';

if (empty($_POST['adress_radio'])) {
    $errors[] = 'Выберите адрес';
} else {
    if ($_POST['adress_radio'] == 'b116') {
        $addr = 'ул. Боровая 116';
    } else if ($_POST['adress_radio'] == 'k20') {
        $addr = 'Кушелевская дорога 20';
    } else if ($_POST['adress_radio'] == 'to12') {
        $addr = 'Дор. на Турухтанные Острова 12';
    } else {
        $addr = 'Любой';
    }
}
$services = '';
foreach ($_POST['services_checkbox'] as $service) {
    $services .= $service . ", ";
}
$where_to_send = '';
foreach ($_POST['where_to_send'] as $source) {
    $where_to_send .= $source . ", ";
}

if (empty($errors)) {
    $arr = array(
        "Заявка" => " с формы записи Квиз",
        "Модель" => $_POST['model'],
        "Кузов" => $_POST['cabin'],
        "Вид работ" => $services,
        "Комментарий" => $_POST['comment'],
        "Куда отправить расчет" => $where_to_send,
        "Телефон" => $_POST['phone'],
        "Адрес" => $addr,
        "С сайта " => 'https://bmw.pikms.ru',
    );
    getRoistat($_POST['phone'], $_POST['comment'], '','', $_POST['model'], $_POST['adress_radio']);
    sendTelegram($arr, $_POST['adress_radio']);
}

function sendTelegram($arr, $address = '')
{

    /*$token = "6108121938:AAEvhKzdIOLLN6Oh68m8GV2ZGpr7ok3K16A";
    $chat_id = "-1001668945809"; # MERCEDES-PIK // Если "Другое" не "К20", "В2АЕ", "СПБ4"*/
    $token = "6108121938:AAEvhKzdIOLLN6Oh68m8GV2ZGpr7ok3K16A";
    $chat_id = '-1001707616285'; // Пик СПБ4 Заявки

    if ($address == 'to12') {
        $token = "6108121938:AAEvhKzdIOLLN6Oh68m8GV2ZGpr7ok3K16A";
        $chat_id = '-1001707616285'; // Пик СПБ4 Заявки
    }
    if ($address == 'k20') {
        // $token = "1737028189:AAEFd51Z6vSHslgX-CNMtItwWD6Iy5EIP74";
        // $chat_id = "-1001493902889"; // Заявки VAG-PIK
        $token = "6108121938:AAEvhKzdIOLLN6Oh68m8GV2ZGpr7ok3K16A";
        //$chat_id = '-1001616535220'; // Пик К20 Vag Заявки
        $chat_id = '-1001668945809'; // Пик К20 Vag Заявки
    }
    if ($address == 'b116') {
        $token = "6108121938:AAEvhKzdIOLLN6Oh68m8GV2ZGpr7ok3K16A";
        $chat_id = "-1002138512820"; // ПИКСПБ Лексус
    }


    $txt = '';
    foreach ($arr as $key => $value) {
        $txt .= "<b>" . $key . "</b>: " . htmlspecialchars($value) . "\n";
    }

    $sendTextToTelegram = file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&parse_mode=html&text=" . rawurlencode($txt)) . "\n";
    if (!$sendTextToTelegram) {
        echo '<p>Ошибка при отправке в Telegram</p>';
    }

    echo 'Спасибо! Ваша заявка отправлена.';
}

function getRoistat($phone = '', $comment = '', $name = '', $email = '' , $mark = '', $addres = '')
{
    $callbackPhone = '78129159153';
    if (array_key_exists('roistat_phone_script_data', $_COOKIE)) {
        $callbackPhoneJson      = json_decode($_COOKIE['roistat_phone_script_data'], true);
        $currentCallbackPhone   = current($callbackPhoneJson);

        $callback = str_replace([' ', '(', ')', '-', '&nbsp;'], '', $currentCallbackPhone['phone']);
        $callback = trim($callback);

        //if (isset($_GET['utm_source']) && $_GET['utm_source'] == 'ya-karti-lexus')
        $callbackPhone = preg_replace('/^\+?(8|7)/', '7', $callback);
    }

    $roistatData = array(
        'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : 'nocookie',
        'key'     => 'ODUxOTY2ZGIxZTAzOWRlNGU0M2IwYTBlOTgzNDczYzI6MTE2MDU4', // Ключ для интеграции с CRM, указывается в настройках интеграции с CRM.
        'title'   => 'Заявка с формы сайта bmw.pikms.ru', // Название сделки
        'comment' => $comment . ' — +'.$callbackPhone, // Комментарий к сделке
        'name'    => $name, // Имя клиента
        'email'   => $email, // Email клиента
        'phone'   => $phone, // Номер телефона клиента
        //'order_creation_method' => '', // Способ создания сделки (необязательный параметр). Укажите то значение, которое затем должно отображаться в аналитике в группировке "Способ создания заявки"
        'is_need_callback' => '1', // Если указано значение '1', на номер клиента будет инициироваться обратный звонок после создания заявки в Roistat (независимо от того, включен ли обратный звонок в Ловце лидов). Если указано значение '0', для данной формы обратный звонок инициироваться не будет (даже если в Ловце лидов включен обратный звонок).
        'callback_phone' => $callbackPhone, // Переопределяет номер, указанный в настройках обратного звонка.
        'sync'    => '1', // Было 0 - то есть была отключена
        //'is_need_check_order_in_processing' => '1', // Включение проверки заявок на дубли
        //'is_need_check_order_in_processing_append' => '1', // Если создана дублирующая заявка, в нее будет добавлен комментарий об этом
        //'is_skip_sending' => '1', // Не отправлять заявку в CRM.
        'fields'  => array(
            'Адрес'   => $addres,
            'Марка'   => $mark,
            'Модель'  => '',
            'Сайт'    => 'bmw.pikms.ru',
            //'charset'    => 'Windows-1251' // Сервер преобразует значения полей из указанной кодировки в UTF-8.
        ),
    );


    /* send to megafon */
    if ($addres == 'k20') {
        $clid = '78129130538';
        if (date("H") % 2 === 0) {
            $manager = (rand(1, 2) == 1) ? '212' : '214';
        } else {
            $manager = '213';
        }
    }
    if ($addres == 'b116') {
        $clid = '78129998553';
        if (date("H") % 2 === 0) {
            $manager = (rand(1, 2) == 1) ? '312' : '314';
        } else {
            $manager = (rand(1, 2) == 1) ? '311' : '313';
        }
    }
    if ($addres == 'to12') {
        $clid = '78129089556';
        $manager = '307';
    }
    megaCall($phone, $manager, $clid);

    file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));
}

function megaCall($user, $manager, $clid = '') {
    if (strtotime('9:00:00') < time() && strtotime('20:50:00') > time()) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://vats332138.megapbx.ru/crmapi/v1/makecall');
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['cmd: makeCall', 'X-API-KEY: 9afaf8e5-87cf-41b4-b8d9-0780038df43c']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'phone' => $user,       // client - Номер клиента, на который последует звонок - обязательно.
            'user'  => $manager,    // login or ext - Сотрудник, который будет соединен с клиентом. Допускается логин или короткий номер - обязательно.
            'clid'  => $clid        // Исходящий номер для звонка - необязательно.
        ]);
        $output = curl_exec($ch);
        curl_close($ch);
    }
}
