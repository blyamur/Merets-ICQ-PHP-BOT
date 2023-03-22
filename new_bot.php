<?php
header("content-type: text/html; charset: UTF-8");

## Блок настроек rawme.ru
# https://rawme.ru/page/api/

$url = 'https://rawme.ru/api/api.php?'; #Ссылка на запрос к сервису
$type = 'bot'; # тип запроса к сервису
$apikey = ''; # ваш API ключ сервиса  (https://rawme.ru/open_api/)
$get_idea = file_get_contents('https://rawme.ru/api/api.php?type=' . $type . '&key=' . $apikey . ''); # отправка запроса к сервису 
$res = json_decode($get_idea);
$idea_message = $res->message; # текст с идеей
$idea_image_src = 'https:' . $res->image_src; # ссылка на пример фотографии
## Блок настроек ICQ
# https://icq.com/botapi/

$icq_bot_token = ''; # ICQ токен (https://icq.com/botapi/botTutorial.html)
$icq_chatId = ''; # название канала,куда производится постинг без @
$icq_bot_text = ' «' . $idea_message . '» '; # текст описание для изображения
$postdata = array(
				'token' => $icq_bot_token,
				'chatId' => $icq_chatId,
				'caption' => $icq_bot_text,
				'file' => file_get_contents($idea_image_src)
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.icq.net/bot/v1/messages/sendFile?');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
$icq_bot_resp = curl_exec($ch);
curl_close($ch);

echo $icq_bot_resp; # просмотр ответа сервера, при отсутствии нужды можно закомментировать

?>
