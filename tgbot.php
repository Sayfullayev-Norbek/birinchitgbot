<?php

include 'Telegram.php';

$telegram = new Telegram("6387497149:AAHBl_3ZZvF00q8zNgDCuQFQ0YvXGCirync");
$text = $telegram->Text();
$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => $text);
$telegram->sendMessage($content);

?>
