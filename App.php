<?php
/*

Ushbu kod @Urolov_29_08 tomonidan yozib chiqildi va @php_bot_kodlari kanalida tarqatildi! 
Manbaga va mualliflik huquqiga tegilmasin :)
Manba: @php_bot_kodlari // Dasturchi: @Urolov_29_08 

Kelayotgan yangi yilingiz muborak bo'lsin :)
*/
ob_start();
define('API_KEY','5656225981:AAGOH1TzmrqoRvg38CV7R3ne36i0jLPB7VA');
   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
   }
   
   function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
   
 $update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$type = $message->chat->type;
$botim = "SertificateMaker_06bot";
$tx = $message->text;
$text= $message->text;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$name = $message->from->first_name;
$username = $message->from->username;
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$ch_user2 = $update->callback_query->message->chat->username;
$message_id2 = $update->callback_query->message->message_id;
$fadmin2 = $update->callback_query->from->id;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$ism = file_get_contents("Bot/$cid.ism");
$step = file_get_contents("Bot/$cid.step");
$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/3.step");
$step1 = file_get_contents("Bot/$chat_id2.step");
$mid = $message->message_id;
$tx = $message->text;
$id1 = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repuser = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;
mkdir("Bot");
$name2 = $update->callback_query->from->first_name;
$username2 = $update->callback_query->from->username;
$about2 = $update->callback_query->from->about;
$lname2 = $update->callback_query->from->last_name;
$title = $message->chat->title;
$description = $message->chat->description;
   // Channel: @php_bot_kodlari 
$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ismi = $message->new_chat_member->first_name;
$is_bot = $message->new_chat_member->is_bot;
   // Channel: @php_bot_kodlari 
$sticker = $message->sticker;
$audio = $message->audio;
$voice = $message->voice;
$video = $message->video;
$caption = $message->caption;
$performer = $message->performer;
$gif = $message->animation;
$doc = $message->document;
$contact = $message->contact;
$game = $message->game;
$location = $message->location;
$forward_ch = $message->forward_from_chat;
$forward = $message->forward_from;
$selfi1 = $message->video_note;
$lichka = file_get_contents("lichka.db");
$chan  = $update->channel_post;
$ch_text = $chan->text;
$ch_photo = $chan->photo;
$ch_mid = $chan->message_id;
$ch_cid = $chan->chat->id;
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$calltext = $update->callback_query->message->text;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;
$cqid = $update->callback_query->id;
$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;
  


$panel =json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"Sertifikat yasash"],],
]
]);

   
$back = json_encode([
   'resize_keyboard'=>true,
   'keyboard'=>[
[['text'=>"Sertifikat yasash"]],
   ]
]);
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.db","$lichka\n$cid");
}
} 
if($text == "/start"){
bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"• Xush kelibsiz:  [$name](tg://user?id=$chat_id)

",
 "parse_mode"=>"MarkDown",
"disable_web_page_preview"=>"true",
"reply_markup"=>$panel
]);
}

$ism = file_get_contents("Bot/$cid.ism");
$step = file_get_contents("Bot/$cid.step");
$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/3.step");
$step1 = file_get_contents("Bot/$chat_id2.step");
mkdir("Bot");


if($tx=="Sertefikat yasash"){
   bot('sendmessage',[
      'chat_id'=>$cid,
    'text'=>"Sertifikat yasash bo'limiga xush kelibsiz 

Pastdagi tugmalardan xohlaganingizni bosing va o'zingiz uchun sertifikatga ega bo'ling",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Yaxshi bolalar 🙋‍♂️","callback_data"=>"b1"],['text'=>"Yaxshi qizlar 🙋‍♀️","callback_data"=>"b2"]],
[['text'=>"Yomon bolalar 🤦‍♂️","callback_data"=>"b3"],['text'=>"Yomon qizlar 🤦‍♀️","callback_data"=>"b4"]],


]
  ]),
   ]);
}


if($data=="b1"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"Foydali botimiz","url"=>"http://t.me/SertificateMaker_06bot"]],
]
]), 
]);
file_put_contents("Bot/2.step","ser1");
}

if($step2=="ser1"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"http://u4500.xvest5.ru/sertifikat/?name=$text&status=yaxshi&reklama=@SertificateMaker_06bot",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"Foydali botimiz","url"=>"http://t.me/SertificateMaker_06bot"]],


]
])
]);
}

if($data=="b2"){  
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"Foydali botimiz","url"=>"http://t.me/SertificateMaker_06bot"]],
]
]), 
]);
file_put_contents("Bot/2.step","ser2");
}

if($step2=="ser2"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"http://u4500.xvest5.ru/sertifikat/?name=$text&status=yaxshi&reklama=@SertificateMaker_06bot",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"Foydali botimiz","url"=>"http://t.me/SertificateMaker_06bot"]],

]
])
]);
}

if($data=="b3"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"Foydali botimiz","url"=>"http://t.me/SertificateMaker_06bot"]],
]
]), 
]);
file_put_contents("Bot/2.step","ser3");
}

if($step2=="ser3"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"http://u4500.xvest5.ru/sertifikat/?name=$text&status=Yomon&reklama=@SertificateMaker_06bot",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"Foydali botimiz","url"=>"http://t.me/SertificateMaker_06bot"]],

]
])
]);
}

if($data=="b4"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"Foydali botimiz","url"=>"http://t.me/SertificateMaker_06bot"]],
]
]), 
]);
file_put_contents("Bot/2.step","ser4");
}
   
if($step2=="ser4"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"http://u4500.xvest5.ru/sertifikat/?name=$text&status=Yomon&reklama=@SertificateMaker_06bot",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
 [['text'=>"Foydali botimiz","url"=>"http://t.me/SertificateMaker_06bot"]],

]
])
]);
}

?>
