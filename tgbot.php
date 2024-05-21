<?php

include 'Telegram.php';

include 'telegramtoken.php';

$chat_id = $telegram->ChatID();
$text = $telegram->Text();
$first_name = $telegram->FirstName();
$last_name = $telegram->LastName();
$username = $telegram->Username();
$message_id = $telegram->MessageID();
if($text == "/start"){
    $option = array(

        array($telegram->buildKeyboardButton("✉️ Batavsil ma'lumot")),

        array($telegram->buildKeyboardButton("🖼 Rasm"), $telegram->buildKeyboardButton("ID")),

        array($telegram->buildKeyboardButton("Video"), $telegram->buildKeyboardButton("👨🏻‍💻 Tuzuvchi")),
    );
    $keyb = $telegram->buildKeyBoard($option, $onetime=true, $resize = true);
    $content = array('chat_id' => $chat_id, 'text' => "ID -> $chat_id  name -> $last_name", 'parse_mode' => "HTML");
    $telegram->sendMessage($content);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Bizdan sizga qanday xizmat kerak!");
    $telegram->sendMessage($content);
}elseif ($text == "👨🏻‍💻 Tuzuvchi"){
    $content = array('chat_id' => $chat_id, 'text' => "Men Haqimda. <a href='https://telegra.ph/Biz-haqimizda-05-20'>Havola!</a>", 'parse_mode' => "HTML");
    $telegram->sendMessage($content);
}elseif ($text == "✉️ Batavsil ma'lumot"){
    $content = array('chat_id' => $chat_id, 'text' => "Kuzatuv ma'lumotlari bo'lmagan hollarda yillik oqim me'yorini aniqlash quyida keltirilgan usullardan birini qabul qilish mumkin.");
    $telegram->sendMessage($content);
}elseif ($text == "ID"){
    $content = array('chat_id' => $chat_id, 'text' => " 👤 You
 ├ id: $chat_id
 ├ first_name: $first_name
 ├ last_name: $last_name
 ├ username: <a href='https://t.me/$username'>$username </a>
 ├ language_code: uz (-) ", 'parse_mode' => "HTML");
    $telegram->sendMessage($content);
}
?>
