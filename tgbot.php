<?php

include 'Telegram.php';

$telegram = new Telegram("6387497149:AAHBl_3ZZvF00q8zNgDCuQFQ0YvXGCirync");
$chat_id = $telegram->ChatID();
$text = $telegram->Text();
if($text == "/start"){
    $option = array(

        array($telegram->buildKeyboardButton("✉️ Batavfil ma'lumot")),

        array($telegram->buildKeyboardButton("🖼 Rasm"), $telegram->buildKeyboardButton("Musiqa")),

        array($telegram->buildKeyboardButton("Video"))
    );
    $keyb = $telegram->buildKeyBoard($option, $onetime=false);
    $content = array('chat_id' => $chat_id, 'text' => "Salom, botimizga xush kelibsiz!");
    $telegram->sendMessage($content);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Bizdan sizga qanday xizmat kerak!");
    $telegram->sendMessage($content);
}
?>
