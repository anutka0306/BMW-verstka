<?php
$errors = array();
$addr = '';

if (empty($_POST['phone'])) {
    $errors[] = 'Укажите номер телефона';
}
if (empty($_POST['address'])) {
    $errors[] = 'Выберите адрес';
} else {
    if($_POST['address'] == 'b116') {
        $addr = 'ул. Боровая 116';
    } else if($_POST['address'] == 'k20') {
        $addr = 'Кушелевская дорога 20';
    } else if($_POST['address'] == 'to12') {
        $addr = 'Дор. на Турухтанные Острова 12';
    }
}

if(empty($errors)) {
    $arr = array(
        "Заявка запись на ремонт" => " с формы в модальном окне",
        "Телефон" => $_POST['phone'],
        "С сайта " => 'https://bmw.pikms.ru',
        "Адрес" => $addr,
    );
    sendTelegram($arr, $_POST['address']);
}

 function sendTelegram($arr, $address = '') {

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
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b>: ".htmlspecialchars($value)."\n";
    }

    $sendTextToTelegram = file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&parse_mode=html&text=".rawurlencode($txt))."\n";
    if (!$sendTextToTelegram){
        echo '<p>Ошибка при отправке в Telegram</p>';
    }

    echo'Спасибо! Ваша заявка отправлена.';
}