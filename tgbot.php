<?php

include 'Telegram.php';

$telegram = new Telegram("6387497149:AAHBl_3ZZvF00q8zNgDCuQFQ0YvXGCirync");
$chat_id = $telegram->ChatID();
$text = $telegram->Text();
if($text == "/start"){
    $option = array(

        array($telegram->buildKeyboardButton("✉️ Batavsil ma'lumot")),

        array($telegram->buildKeyboardButton("🖼 Rasm"), $telegram->buildKeyboardButton("Musiqa")),

        array($telegram->buildKeyboardButton("Video"), $telegram->buildKeyboardButton("👨🏻‍💻 Tuzuvchi")),
    );
    $keyb = $telegram->buildKeyBoard($option, $onetime=true, $resize = true);
    $content = array('chat_id' => $chat_id, 'text' => "Salom, botimizga xush kelibsiz!");
    $telegram->sendMessage($content);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Bizdan sizga qanday xizmat kerak!");
    $telegram->sendMessage($content);
}elseif ($text == "👨🏻‍💻 Tuzuvchi"){
    $content = array('chat_id' => $chat_id, 'text' => "Men Haqimda. <a href='https://telegra.ph/Biz-haqimizda-05-20'>Havola!</a>", 'parse_mode' => "HTML");
    $telegram->sendMessage($content);
}elseif ($text == "✉️ Batavsil ma'lumot"){
    $content = array('chat_id' => $chat_id, 'text' => "Kuzatuv ma'lumotlari bo'lmagan hollarda yillik oqim me'yorini aniqlash quyida keltirilgan usullardan birini qabul qilish mumkin.");
    $telegram->sendMessage($content);
}
?>
