 <?php
ob_start();
$API_KEY = "1813951618:AAF11wfWw9ksieVdiE1gGLUiaI6mTezoeM4";
$sudo = "1941865340";
$admin = "1941865340";
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$Alsh = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$Alsh";
$Alsh = file_get_contents($url);
return json_decode($Alsh);}
//••┉┉┉┉┉┉┉┉┉┉┉┉┉••//
$sudo = $sudo;
$username="@shex0mjoinbot"; //یوزرە نەمی بۆت
$tws = "Shex0mbots"; // یوزرنەمی کەناڵ بێ @
$kna = "shex0mbots"; //یوزرنەمی کەناڵ بێ @
$SAEEDFiles = "$sudo"; //
$admin = "$sudo"; //
$botid ="1813951618";// ئایدی بۆت
$idBot = "$botid";
$ali = "@ShEx0mBots";// یوزرنەمی کەناڵ
$alii = "@ShEx0mBots";// یوزرنەمی کەناڵ

function AliZip($AliZip1, $AliZip2){
$AliZip4 = realpath($AliZip1);
$AliZip = new ZipArchive();
$AliZip->open($AliZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$AliZip3 = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($AliZip4),
RecursiveIteratorIterator::LEAVES_ONLY);
foreach($AliZip3 as $AliZip5 => $AliZip6){
if(!$AliZip6->isDir()){
$AliZip7 = $AliZip6->getRealPath();
$AliZip8 = substr($AliZip7, strlen($AliZip4) + 1);
$AliZip->addFile($AliZip7, $AliZip8);
}}
$AliZip->close();
}
#▂▂▂▂▂▂▂▂▂▂▂▂▂#
# كود حجم الملف لـ @MrDGSY #
function AliZip1($AliZip9, $AliZip10 = 2){
$AliZip11=array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
$AliZip12=floor((strlen($AliZip9) - 1) / 3);
return sprintf("%.{$AliZip10}f", $AliZip9 / pow(1024, $AliZip12)) . @$AliZip11[$AliZip12];
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$from_id = $message->from->id;
$text = $message->text;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$name = $message->from->first_name;
$user = $message->from->username;

$tws = file_get_contents("tw.txt");
$de = file_get_contents("admin2.txt");
$ad = array("$admin","$de");
$list = file_get_contents("blocklist.txt");
$ebu = explode("\n",$list);
$type       = $update->message->chat->type;
if(in_array($from_id,$ebu)){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⛳|باند کراوی ناتوانی بوت بەکاربێنت",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);    
}
$rec = $update->channel_post->reply_to_message->text;
$from_id = $message->from->id;
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
 $aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);

date_default_timezone_set('Asia/Baghdad');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');

$time = time() + (979 * 11 + 1 + 30);
$JJ = "http://api.telegram.org/bot".API_KEY."/getChatMembersCount?chat_id=$chat_id";
$JJ1 = file_get_contents($JJ);
$JJ11 = json_decode($JJ1);
$JJ111 = $JJ11->result;
$title = $message->chat->title;
mkdir('alsh');
include "php.php";

$from_id = $message->from->id;
$type       = $update->message->chat->type;
$gp = explode("\n",file_get_contents("group.txt"));
$pv = explode("\n",file_get_contents("alsh/Alsh.txt"));
$sta = file_get_contents("start.txt");

$Alsh = "TO"; 
if($text == "/start" or $text == "ShEx0m" or $text == "ShEx0m"){
$ali = "@ShEx0mBots"; #یوزرنەمی کەناڵ
$join = file_get_contents("https://api.telegram.org/bot".$Alsh."/getChatMember?chat_id=$ali&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"👨‍✈️ ¦ سڵاو بەرێز 🙇‍♂،
👾 ¦ ناتوانی بۆت بەکار بهێنی
تا جۆینی ئەم چەناڵەی خوارەوە نەکەی @ShEx0mbots
🖲 ¦ چەناڵ ~⪼ $ali ،
▂ ",

]);return false;}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"",'reply_to_message_id'=>$message->$message_id,]);}
#▂▂▂▂▂▂▂▂▂▂▂▂▂#
$all = file_get_contents("id.txt");
$rabt = file_get_contents("rabt.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$all&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍✈️ ¦ سڵاو بەرێز 🦁،
👾 ¦ ناتوانی بۆت بەکاربێنت،
™ ¦ تکایە جۆینی چەناڵ بە ،
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
- پاشان کە { /start }",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
          'inline_keyboard'=>[
[['text'=>"جۆینبە ✅",'url'=>"$rabt"]],
]])]);return false;}

$op = file_get_contents("ch.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$op&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👨‍✈️ ¦ سڵاو بەرێز 👥،
👾 ¦ ناتوانی بۆت بەکاربێنت ،
™ ¦ تکایە جۆینی چەناڵ بە بۆ چالاک بوونی بۆت ،
🔘 ¦ چەناڵ ~⪼ $op ؛
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
- پاشان { /start } کە ",
'reply_to_message_id'=>$message->message_id,
]);return false;}

$oop = file_get_contents("chc.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$oop&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👨‍✈️ ¦ سڵاو بەرێز 👥،
👾 ¦ ناتوانی بۆت بەکاربێنت ،
™ ¦ تکایە جۆینی چەناڵ بە بۆ چالاک بوونی بۆت ،
🔘 ¦ چەناڵ ~⪼ $oop ؛
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
- پاشان { /start } کە 
",
'reply_to_message_id'=>$message->message_id,
]);return false;}
if($text and $text != "/start"){
file_put_contents("text.txt", "$text\n",FILE_APPEND);}
if($text and $type == "private" and !in_array($from_id, $pv)){
file_put_contents("alsh/Alsh.txt", "$from_id\n",FILE_APPEND);}
if($text and $type == "supergroup" and !in_array($chat_id, $gp)) {
file_put_contents("group.txt", "$chat_id\n",FILE_APPEND);}
if($text == "/start" and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $chat_id != $admin and $sta == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌸¦ - سڵاو بەڕێز  [$name](tg://user?id=$from_id)
🤖¦ -بەخێرهاتی من بۆتی زیادکرنی ئەندام•
➕¦ - کاری من زیادکردنی ئەندامە لەری گرووپەوە•
🔄¦ - من زیادی گرووپت بکە و بم کە ئادمین•
✅¦ - بۆ چالاکبوونم (ShEx0m) بنێرە لە گرووپ•
❎¦ - بۆ ناچالاکبوونم ( ShEx0m.Off) بنێرە لە گرووپ•
⏱┊‹ [$date $aa](t.me/ShEx0mBots)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"
- بچۆ گرووپەکەم
$year/$month/$day",'url'=>"http://telegram.me/$username?startgroup=new"]],
]
])
]);
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
}
$bot = file_get_contents("com.txt");
if($text == "/start" and in_array($chat_id,$ad)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👥سڵاو  $name .

◾️ تۆ ئەدمینی . 
◽️ ئەتوانی ئەم کردارانە کەی
◾دەست لێرە دە /mem
ـ••┉┉┉┉┉┉┉┉┉┉┉┉┉••
**📯┊جۆین کە @ShEx0mBots**
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"پەیوەستکردن چالاک کە ،📬.","callback_data"=>"utws"],["text"=>"پەیوەستکردن ناچالاک کە،📬.","callback_data"=>"ntws"]],
[["text"=>"باند کردنی مینبەر ،.","callback_data"=>"bn"],["text"=>"لابردن باند کراو ،.","callback_data"=>"unbn"]],
[["text"=>"ئەدمین زیاکە بۆ بۆت ،👥.","callback_data"=>"admin"],["text"=>"ئەدمین لابە ،👥.","callback_data"=>"unadmin"]],
[["text"=>"زانیاری ئەندام بە ئایدی ،🔗.","callback_data"=>"info"],["text"=>"زانیاری ئەندام بە یوزەرنەم ،🚦.","callback_data"=>"infous"]],
[["text"=>"بە زۆر جۆین کردن.","callback_data"=>"chh"],["text"=>"ناردنی نامە،🏆.","callback_data"=>"bcc"]],
[["text"=>"کۆد تاقیکەرەوە ،💧.","callback_data"=>"setphp"],["text"=>"لابردنی کۆد،⛔.","callback_data"=>"delphp"]],
[["text"=>"وریاکەرەوەی جۆین بوون ،📬.","callback_data"=>"on"],["text"=>"کوژانەوەی وریاکەرەوەی جۆین بوون ،📬.","callback_data"=>"off"]],
[["text"=>"بەرزکردنەوەی فایل ،📮.","callback_data"=>"puo"]],
[["text"=>"فۆڕمات،⌛.","callback_data"=>"delbot"]],
]])
]);   
unlink("com.txt");
}
#رجوع
if($data == "bk" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" 
👥سڵاو  $name .

◾️ تۆ ئەدمینی . 
◽️ ئەتوانی ئەم کردارانە کەی
◾دەست لێرە دە /mem
ـ••┉┉┉┉┉┉┉┉┉┉┉┉┉••
**📯┊جۆین کە @ShEx0mBots**
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"پەیوەستکردن چالاک کە ،📬.","callback_data"=>"utws"],["text"=>"پەیوەستکردن ناچالاک کە،📬.","callback_data"=>"ntws"]],
[["text"=>"باند کردنی مینبەر ،.","callback_data"=>"bn"],["text"=>"لابردن باند کراو ،.","callback_data"=>"unbn"]],
[["text"=>"ئەدمین زیاکە بۆ بۆت ،👥.","callback_data"=>"admin"],["text"=>"ئەدمین لابە ،👥.","callback_data"=>"unadmin"]],
[["text"=>"زانیاری ئەندام بە ئایدی ،🔗.","callback_data"=>"info"],["text"=>"زانیاری ئەندام بە یوزەرنەم ،🚦.","callback_data"=>"infous"]],
[["text"=>"بە زۆر جۆین کردن.","callback_data"=>"chh"],["text"=>"ناردنی نامە،🏆.","callback_data"=>"bcc"]],
[["text"=>"کۆد تاقیکەرەوە ،💧.","callback_data"=>"setphp"],["text"=>"لابردنی کۆد،⛔.","callback_data"=>"delphp"]],
[["text"=>"وریاکەرەوەی جۆین بوون ،📬.","callback_data"=>"on"],["text"=>"کوژانەوەی وریاکەرەوەی جۆین بوون ،📬.","callback_data"=>"off"]],
[["text"=>"بەرزکردنەوەی فایل ،📮.","callback_data"=>"puo"]],
[["text"=>"فۆڕمات.،⌛.","callback_data"=>"delbot"]],
]])
]);   
unlink("com.txt");
}
#▂▂▂▂▂▂▂▂▂▂▂▂▂#
if($data == "on" and in_array($chat_id2,$ad)){
file_put_contents("onn.txt","on");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
💘| ئێستا کەبێتە بۆت تۆ ئاگاداری،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
}

if($data == "off" and in_array($chat_id2,$ad)){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
🔖| هاتنەناوە ناچالاک کرا،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
unlink('onn.txt');
}
#▂▂▂▂▂▂▂▂▂▂▂▂▂#
if($data == "unadmin" and $chat_id2 == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
👥| ئەدمینی لاوەکی لابرا.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
unlink('admin2.txt');
}
if($data == "delbot" and in_array($chat_id2,$ad)  ){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو  $name .
📮| تۆ دڵنیات کە ئەتەوێت بۆت فۆرمات کەی،
🎄| تب/کاتێک فۆرمات کرد هەموو زانیاریەکان نامێنێت ئەندمەکان سفر ئەبنەوە....،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"بەڵێ.","callback_data"=>"dell"],["text"=>"نەخێر نەمەوێت.","callback_data"=>"bk"]],
]])
]);   
}
if($data == "dell" and in_array($chat_id2,$ad)  ){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
📮| هەموو زانیاریرکان سڕایەوە",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
unlink("start.txt");
unlink("tw.txt");
unlink("blocklist.txt");
unlink("admin2.txt");
unlink("alsh/Alsh.txt");
unlink("rabt.txt");
unlink("id.txt");
unlink("ch.txt");
unlink("chc.txt");
unlink("text.txt");
unlink("php.php");
}
#قسم الاذاعه
#▂▂▂▂▂▂▂▂▂▂▂▂▂#
if($data == "bcc" and in_array($chat_id2,$ad)  ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
💛| بەشی ناردنی نامە بەم شێوازانە،",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"ئاسای بۆ گرووپ و کەسی ،👥.","callback_data"=>"bc"],["text"=>"بە فۆروید ،👥.","callback_data"=>"for"]],
[["text"=>"ناردن کەسی ،👥.","callback_data"=>"inln"],["text"=>"ناردنی میدیا ،👥.","callback_data"=>"med"]],
[["text"=>"ناردنی HTML ،👥.","callback_data"=>"HTML"],["text"=>"ناردنی مرک داون ،👥.","callback_data"=>"MarkDown"]],
[["text"=>"بۆ گرووپ ،👥.","callback_data"=>"sndgp"],["text"=>"کامل ،👥.","callback_data"=>"MarkDown"]],
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
}
#▂▂▂▂▂▂▂▂▂▂▂▂▂#
if($data == "chh" and in_array($chat_id2,$ad)  ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
👥| لێرا کەناڵەکەت زیاکە،",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>" کەناڵی یەکەم.","callback_data"=>"add2"],["text"=>"کەناڵی دووەم.","callback_data"=>"add1"]],
[["text"=>"کەناڵی خاس 🔗.","callback_data"=>"add"]],
[["text"=>"سڕینەوەی کەناڵ🎺.","callback_data"=>"remch"]],
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
}
#▂▂▂▂▂▂ رسالة الترحيب ▂▂▂▂▂▂▂#
if($data == "start" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","start");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| أهلاً بك عزيزي $name .
👥| حسننا قم بارسال النص الان،
🐞| يمكنك ايضا استخدام الماركدوان",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "start" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("start.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👥| أهلاً بك عزيزي $name .
🎯| تم حفظ نص الاستارت،",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#▂▂▂▂ تفعيل التواصل ▂▂▂▂▂▂▂▂#
if($data == "utws" and in_array($chat_id2,$ad)  ){
file_put_contents("tw.txt","on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
📦|ئێستا بوت چالاکە ،",
]); 
}
#▂▂▂▂▂تعطيل التواصل ▂▂▂▂▂▂▂▂#
if($data == "ntws" and in_array($chat_id2,$ad)  ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
📮|بوت ناچالاکە ئيستا ،",
]); 
unlink("tw.txt");
}
if($text and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $chat_id != $admin and $tws == "on"){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
if($text and $message->reply_to_message && $text!="/info" && $text!="/ban" && $text!="/unban" && $text!="/forward" and !$data ){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}
#▂▂▂▂▂اضافة ادمن ▂▂▂▂▂▂▂▂#
if($data == "admin" and $chat_id2 == $admin){
file_put_contents("com.txt","ad");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
📮| ئێستا ئایدی ئەوکەسم بەرێ کە ئەتەوێت بیکەیت بە ئەدمین،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "ad" and $text != "/start" and $chat_id == $admin){
file_put_contents("admin2.txt",$text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👥| سڵاو $name .
📮| ئەدمین زیاکرا،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
bot('sendMessage',[
'chat_id'=>$text,
'text'=>"👥| پیرۆزە بوویت بە ئەدمین ،",
'parse_mode'=>'MarkDown',
]);
unlink("com.txt");
}
#▂▂▂▂حظر عضو ▂▂▂▂▂▂▂#
if($data == "bn" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","bn");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| ئێستا ئادی کەسی مەبەستبنێرا،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "bn" and $text != "/start" and in_array($chat_id,$ad)  ){
$myfile2 = fopen("blocklist.txt", "a") or die("Unable to open file!");	
fwrite($myfile2, "$text\n");
fclose($myfile2);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👥| سڵاو $name .
📨| بان کرا،",
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"📨| باند کرایت لەلایەن ئدمین ،",
]);
unlink("com.txt");
}
#▂▂▂▂الغاء الحظر ▂▂▂▂▂▂▂#
$listt = file_get_contents("blocklist.txt");
if($data == "unbn" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","unbn");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
👥| ئایدی کەسی مەبەست بنێرە،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "unbn" and $text != "/start" and in_array($chat_id,$ad)  ){
$newlist = str_replace($text,"",$listt);
file_put_contents("blocklist.txt",$newlist);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👥| باندکراو لابرا،",
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"👥| لا برای لەلیستی باندکراوەکان ئێستا بوت چالاکە ،",
]);
unlink("com.txt");
}
#▂▂▂▂▂▂معلومات العضو▂▂▂▂▂▂▂#
if($data == "info" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","info");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| ئێستا ئایدی ئەندام بنێرا،
👥| پێویستە بەکارهێنەری بۆت بێت،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "info" and $text != "/start"and in_array($chat_id,$ad)  ){
$ine = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$text"));
$infe4 =$ine->result->first_name;
$infe2 =$ine->result->id;
$infe3 =$ine->result->username;
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*🎯| زانیاری ئەندام*
🔖| ناو 💬 : *$infe4* \n 🎧| یوزەر 💌 : [@$infe3] \n 📚| یایدی 🎄 : `$infe2`",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>'MarkDown', 
]);
unlink("com.txt");
}
#▂▂▂▂▂معلوماته بالمعرف▂▂▂▂▂▂#
if($data == "infous" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","infus");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ئێستا یوزەرنەمی ئەندام بنێرە",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
}

#▂▂▂▂▂▂الاجباري 1▂▂▂▂▂▂▂#
if($data == "add2" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","ab");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦| ئێستا کەنالەکەت بنێرا بە @
📥| وەک: `@ShEx0mBots`",
'parse_mode'=>"Markdown",
]);
}
if($bot == "ab" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("chc.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎯| چەناڵ زیا کرا.
📮| چەناڵ : $text.
گەڕانەوە /start.",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#شـترآك اجباري1
if($data == "add1" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","al");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦|  ئێستا کەنالەکەت بنێرا بە @
📚| وەک : `@ShEx0mBots`",
'parse_mode'=>"Markdown",
]);
}

if($bot == "al" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("ch.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎯| حسننا عزيزي تم حفظ قناتك الان قم برفعي مشرف في قناتك .
📮| قناتك : @$text.
لرجوع اضغط /start.",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#شتراك خاص
if($bot == "alo" and $text != "/o" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("rabt.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💛| تم حفظ رابط القناة .
📚| رابط قناتك : `[$text]`
🔖| آيدي قناتك : `$all`
🔖| آلآن قم برفع البوت ادمن في قناتك
للرجوع اضغط /start.",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
if($bot == "vv" and $text != "/o" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("com.txt","alo");
file_put_contents("id.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✂| تم حفظ ايدي قناتك !
📛| حسننا الان قم برسال رابط قناتك !
للرجوع اضغط /start.",
'reply_to_message_id'=>$message->message_id,
]);
}
if($data == "add"  and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","vv");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📌| کەناڵەکە بناسێنە !
📮| وەک : `-1001416392355` !
",
'parse_mode'=>"Markdown",
]);
}



#حذف قنوات
if($data == "remch" and in_array($chat_id2,$ad)  ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦| کەناڵەکان سڕایەوە،",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
unlink("rabt.txt");
unlink("id.txt");
unlink("ch.txt");
unlink("chc.txt");
}
#آذآعه MarkDown
if($data == "MarkDown" and in_array($chat_id2,$ad) ){
file_put_contents("com.txt","sendm");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"با ناردنەکەیت لەسەر شێوەی MarkDown .",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);
}
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$alshh3 = fgets($ali);
if($bot == "sendm" and in_array($chat_id,$ad) ){
bot('sendMessage', [
'chat_id' =>$alshh3,
'text'=>$text,
'parse_mode'=>"html",
'disable_web_page_preview' =>"true"
]);
unlink("com.txt");
}
}

#اذاعه HTML
if($data == "HTML" and in_array($chat_id2,$ad) ){
file_put_contents("com.txt","sendh");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
با ناردنەکەت لەسەر شێوەی  HTML .",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);
}
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$alshh3 = fgets($ali);
if($bot == "sendh" and in_array($chat_id,$ad) ){
bot('sendMessage', [
'chat_id' =>$alshh3,
'text'=>$text,
'parse_mode'=>"html",
'disable_web_page_preview' =>"true"
]);
unlink("com.txt");
}
}
#اذاعه مجموعات
$gy = explode("\n",file_get_contents("group.txt"));
if($data == "sndgp" and in_array($chat_id2,$ad) ){
file_put_contents("com.txt","sendap");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
ناردن بۆ گرووپ بە تەنیا.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);
}
if($bot == "send" and in_array($chat_id,$ad)  ){
foreach ($gy as $id){
bot('sendmessage',[
'chat_id'=>$id,
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
unlink('com.txt');
}
#اذاعه للكل
$mee = explode("\n",file_get_contents("alsh/Alsh.txt"));
if($data == "sendall" and in_array($chat_id2,$ad) ){
file_put_contents("com.txt","sendap");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| أهلاً بك عزيزي $name .
ارسل رسالتك لكي اقوم بارسالها للجميع.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);
}
if($bot == "sendap" and in_array($chat_id,$ad)  ){
foreach ($gy as $id){
bot('sendmessage',[
'chat_id'=>$id,
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
foreach ($mee as $idd){
bot('sendmessage',[
'chat_id'=>$id,
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
unlink('com.txt');
}
}
#اذاعه
if($data == "bc" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","send");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
 ئێستا شتەکانت بنێرا .",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);
}
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$alshh3 = fgets($ali);
if($bot == "send" and in_array($chat_id,$ad)  ){
bot('sendMessage', [
'chat_id' =>$alshh3,
'text'=>$text,
'disable_web_page_preview' =>"true"
]);
unlink("com.txt");
}
}
$tx = file_get_contents("alh.txt");
if($data == "inln" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","sn");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
تێکستەکت با بە مارک داون بێت",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);
}
if($bot == "sn" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("alh.txt","$text");
file_put_contents("com.txt","snn");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👥| سڵاو $name .
بەم شێوازە🎄.
text = link
text = link + text = link
نووسین = لینک
ننووسینص = لینک + نووسین = لینک",
'reply_to_message_id'=>$message->message_id,
]);
}
$i=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
$rows = explode("\n",$text);
foreach($rows as $row){
$j=0;
$keyboard["inline_keyboard"][$i]=[];
$bottons = explode("+",$row);
foreach($bottons as $botton){
$alsh = explode("=",$botton."=");
$Ibotton = ["text" => trim($alsh[0]), "url" => trim($alsh[1])];
$keyboard["inline_keyboard"][$i][$j] = $Ibotton;
$j++;                }                $i++;            }
$reply_markup=json_encode($keyboard);
if($bot == "snn" and $text != "/start" and in_array($chat_id,$ad)  ){
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$alshh = fgets($ali);
bot('sendmessage',[
'chat_id'=>$alshh,
'text'=>$tx,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>($reply_markup)
]);
}
unlink("com.txt");
unlink("alh.txt");
}
if($data == "for" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","fd");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
 ناردنی نامەکەت بە شێوەی فۆرد وەید .",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);
}
if($bot == "fd" and $text != "/start" and in_array($chat_id,$ad)  ){
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$ali2 = fgets($ali);
bot('forwardMessage',[
 'chat_id'=>$ali2,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("com.txt");
 }
 }
 if($data == "med" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","mide");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
🔖| ئەتوانی ئەمانە بنێریت،
📌| ناردن. وەک؛ فایل .فایلی دەنگی. ڕەسم . ڤیدیؤ،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);
}
#اذاعه ب ميديا
 if($message->video and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
 $ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('sendvideo',['chat_id'=>$aly,'video'=>$message->video->file_id,'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 'text'=>"ڤیدیۆ ڕۆشت '📚!",]); }unlink("com.txt"); }
if($message->document and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('Senddocument',['chat_id'=>$aly,'document'=>$message->document->file_id,'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
]);bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"فیلەکەت ڕۆیشت '🎻!", ]); } unlink("com.txt");}
 if($message->audio and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
 	$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
 bot('sendaudio',[    'chat_id'=>$aly,    'audio'=>$message->audio->file_id,    'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
 ]); bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"فایلی دەنگی ڕۆیشت '🎺!", ]); } unlink("com.txt");}
if($message->photo and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
	$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
    bot('sendPhoto',[      'chat_id'=>$aly,      'photo'=>$message->photo[0]->file_id,      'caption'=>$message->caption,      'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
    ]);bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"ڕەسم رۆیشت '📇!", ]); } unlink("com.txt");}
if($message->voice and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
	$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
    bot('sendvoice',[     'chat_id'=>$aly,      'voice'=>$message->voice->file_id,     'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
      ]);      bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"فایلی دەنگی رۆێشت '📜!", ]); } unlink("com.txt");}
      if($message->sticker and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
      	$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('sendsticker',['chat_id'=>$aly,'sticker'=>$message->sticker->file_id
]);bot('sendmessage',['chat_id'=>$chat_id, 'text'=>"ستیکەر رۆیشت '📂!", ]); }unlink("com.txt"); }


#رفع نسخه
if($data == "puo" and in_array($chat_id2,$ad) ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
زانیاریەکان بنێرە بە فائلی txt.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);
}
$repad = $message->reply_to_message->document;
$aduo = $repad->file_id;
if(isset($repad) and in_array($chat_id,$ad)){
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$aduo),true);
$path = $url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$okey = file_put_contents("alsh/Alsh.txt",file_get_contents($file));
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"👥| أهلاً بك عزيزي $name .
📦| تم رفع النسخة بنجاح.",
]);
}
#الاشعار





$gg = file_get_contents("onn.txt");
if($gg == "on" and $chat_id != $admin and !$data){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"👥 سڵاو
◾️ تۆ ئەدمینی ئەمم بۆتەی. 
◽️ کەسێک هاتە ناو بۆت
◾ ️ /mem
ـ••┉┉┉┉┉┉┉┉┉┉┉┉┉••
*🎫 ناو » *[$name](tg://user?id=$chat_id)* ، 
📮 یوزەنەم » *[@$user](tg://user?id=$chat_id)* ، 
🎟 ئایدی » *[$chat_id](tg://user?id=$chat_id)* ،  
👥 ژمارەی ئەدام » *$SAEED *،
📅 کات » *$date $aa* ،
√*
━ـ━ـ━ـ━ـ━ـ━ـ━ـ━",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
#حفظ كود
if($data == "setphp" and in_array($chat_id2,$ad) ){
file_put_contents("com.txt","set");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
کۆدی نوێ بنێرە.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);
}
if($bot == "set" and in_array($chat_id,$ad)  ){
file_put_contents("php.php","<?php $text ?>");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👥| سڵاو $name .
کۆدی زیاکراو لابرا ." ,
'parse_mode'=>"Markdown",
]);
unlink('com.txt');
}
if($data == "delphp" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","set");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👥| سڵاو $name .
کۆدی زیاکراو لابرا..",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);
}
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = $sudo; // ايديك.
$bot_id       = $botid; // ايدي بوتك .
$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;

mkdir("Fri3nd_s");

$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="🖇¦ اذاعه عام توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
   ]);
} 

if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}

if($text == "اذاعه خاص" || $text =="⌛️¦ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو ،💗ء*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
          ]);
}
if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "📆⎮ اذاعه •" || $text =="📤¦ اذاعه عام" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id
          ]);
}

if($text == "اذاعه خاص بالتوجيه" || $text == "⚫️¦ اذاعه خاص توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
⚜• تم توجيه رسالتك الى $MOhaMMed عضو ،💗ء*",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id
   ]);
}
$SA3ED = explode("\n",file_get_contents("SAEED.txt"));
$SAEED = count($SA3ED)-1;
$T4TTTT = file_get_contents("XTXTK.txt");
if ($update && !in_array($chat_id, $SA3ED)) {
    file_put_contents("SAEED.txt", $chat_id."\n",FILE_APPEND);
  }
if($text == "" and $chat_id == $SAEEDFiles){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>""
    ]);
}
$tkzk = explode("\n",file_get_contents("text.txt"));
$meb = explode("\n",file_get_contents("alsh/Alsh.txt"));
$band = explode("\n",file_get_contents("blocklist.txt"));
$tx = explode("\n",file_get_contents("text.txt"));
$admn = file_get_contents("admin2.txt");
$gpp = explode("\n",file_get_contents("group.txt"));
$mem = count($meb)-1;
$zktex = count($tkzk)-1;
$bnn = count($band)-1;
$ts = count($tx)-1;
$grup = count($gpp)-1;
$oop = file_get_contents("chc.txt");
$op = file_get_contents("ch.txt");
$all = file_get_contents("id.txt");
$rabt = file_get_contents("rabt.txt");
if($text == "زانیاری١" | $text == "/mem" and in_array($chat_id,$ad)  ){
 date_default_timezone_set("Asia/Baghdad");
$getMe = bot('getMe')->result;
$date = $message->date;
$gettime = time();
$sppedtime = $gettime - $date;
$time = date('h:i');
$date = date('y/m/d');
$userbot = "{$getMe->username}";
$userb = strtoupper($userbot);
if ($sppedtime == 3  or $sppedtime < 3) {
$f = "زۆر باش 👏🏻";}
if ($sppedtime == 9 or $sppedtime > 9 ) {
$f = "باش 👍🏻";}
if ($sppedtime == 10 or $sppedtime > 10) {
$f = " خراپ 👎🏻"; }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👥| بەژدار بووان » *$SAEED * ،
👥| ئەندان » *$bnn* ،
👥| جۆری بۆت » *$f* ،
👥|  ژماری نامەی هاتوو » *$ts* ،
👥| گرووپەکان » *$MoHaMMedd* ،
👥| کات و بەروار » *$date $a* ،
👥| ئەدمین دووەم » *$admn* ،
👥| کەناڵ،
@$op ، @$oop
👥| کەنالی خاس،
`$all` ، `$rabt`
ـ••┉┉┉┉┉┉┉┉┉┉┉┉┉••",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• گەرانەوە 📄.","callback_data"=>"bk"]],
]])
]);   
unlink("php.php");
}

$modxe = file_get_contents("usr.txt");
mkdir("SA3ED");
$SAEED = $message->message_id;
$SAEED0= file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$SAEED1= json_decode($SAEED0, true);
$SAEED2 = $SAEED1['result']['status'];
$ch = file_get_contents("SA3ED/$chat_id.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
if($SAEED2 != "creator" and $SAEED2 != "administrator"){
bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$SAEED
]);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"ـ💞¦ - [$name](tg://user?id=$from_id)
•💞¦ - ببوورە بەڕێز•

•💞¦ - ناتوانی چات بکەی لەم گرووپە•
•💞¦ - سەرەتا دەبێ جۆینی کەناڵی گرووپ بکەی•
•💞¦ - دواتر کە جۆینت کرد دەتوانی چات بکەی•
•💞¦ - گەرجۆین نەکەی من ئەم نامە دەنێرمەوە•

•💕¦ - هەر ئێستا جۆین بکە ؛ 
•💞¦ - کەناڵەکە  [@$ch]  👉
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>" 🏃ڕاکە جۆین بە 🏃",'url'=>"https://t.me/$ch"]]
]
])
]);return false;}}
 
$zha = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($zha, true);
$you = $info['result']['status'];
$user = $message->from->username;
$tc = $update->message->chat->type;
$from_id = $message->from->id;
$time = time() + (979 * 11 + 1 + 30);
$JJ = "http://api.telegram.org/bot".API_KEY."/getChatMembersCount?chat_id=$chat_id";
$JJ1 = file_get_contents($JJ);
$JJ11 = json_decode($JJ1);
$JJ111 = $JJ11->result;
$title = $message->chat->title;
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "ShEx0m" or $text == '/add' and  $you == "administrator") {
$export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
$l = $export->result;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"",
'reply_to_message_id'=>$message->message_id,
]);
$c = count($groups);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"👮‍♂┇زیا کرا :-
🔖┇ناوی گرووپ ، ~⪼ $title
━ـ━ـ━ـ━ـ━ـ━ـ━ـ━
📎┇لینکی گرووپ ~⪼ $l
🖊┇ئایدی گرووپ~⪼ ( $chat_id ) 
📊┇جۆری گرووپ ~⪼ $tc 
👥┇ژمارەی ئەندام ~⪼ { $JJ111 }
━ـ━ـ━ـ━ـ━ـ━ـ━ـ━
🔍┇بەڕێوبەر :[$name](tg://user?id=$from_id)
🔺┇یوزەرنەیم~⪼ @$user
🔴┇ناوی  ~⪼ $name
🔻┇یایدی ~⪼ $from_id
━ـ━ـ━ـ━ـ━ـ━ـ━ـ━
⚙┇ژمارەی گرووپەکان ~⪼ $cg
━ـ━ـ━ـ━ـ━ـ━ـ━ـ━
📟┇گرووپەکان ~⪼ $c
⏱┇کات~⪼ $date $aa
🗓┇بەروار ~⪼ $year/$month/$day

🔘┇نوێکاری✑ $alii
√",
'disable_web_page_preview'=>true,
      ]);
    }
 }
if($text =="بۆت دەرچۆ لەگرووپ" &&$from_id==$admin ){ 
$send = file_get_contents("data/add.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/add.json', $send); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"📮┇من دەرکرام ~⪼ $t
🛠┇بەهۆی ئەدمینی ڕەسمی
🖲┇سەردانی چەناڵمان کەن $alii", 
]);  
bot('leaveChat',[ 
'chat_id'=>$chat_id, 
]); 
} 
$tbbots = $update->message->new_chat_member->id;
$botid ="$botid";
if($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
if($tbbots == $botid){    
bot('sendmessage',[  
  'chat_id'=>$chat_id,
  'text'=>" چۆنیەتی چالاک کردن ™ ،
👾 ¦ بۆتکە بکا بە ئەدمین لە چەناڵ و گرووپ
🗃 ¦ پاشان وشەی (ShEx0m) بنێرە لە گرووپ
ئەدمینی بۆت @ShEx0m
",
'reply_to_message_id'=>$message_id,
  ]);
}
}
}
if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
$S = file_get_contents("SA3ED/S$chat_id $from_id.txt");
if($text == "join.on"){
file_put_contents("SA3ED/S$chat_id $from_id.txt", "1");
file_put_contents("SA3ED/$chat_id.txt", "");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ـ💞¦ -  [$name](tg://user?id=$from_id)
💞¦ - یوزەری کەناڵەکەت بنێرە•
💞¦ - یوزەری کەناڵت بێ ئاماژەی @ بنێرە•
💞¦ - نموونە ShEx0mBots •
💞¦ - دەبێت بۆت لە گرووپ ئادمین بێ•
💞¦ - دەبێت بۆت لە کەناڵی زیادکراو ئادمین بێ•
ـ💕¦ @ShEx0mBots️",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
]);
}
if($text and $S == "1"){
file_put_contents("SA3ED/$chat_id.txt", "$text");
file_put_contents("SA3ED/S$chat_id $from_id.txt", "");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"-•♥️¦ -بەڕێز [$name](tg://user?id=$from_id)
•♥️¦ - بەسەرکەوتووی سەرجەم کارەکە ئەنجام درا
•♥️¦ -تکایە بۆت بکە ئادمین لە چەناڵ و گرووپ•‍✈️",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
]);
}
if($text == "Join.Off"){
file_put_contents("SA3ED/$chat_id.txt", "");
bot('sendmessage',[
'chat_id'=>$chat_id,
[$name](tg://user?id=$from_id) 

•🤖¦ -بۆتەکە بەسەرکەوتووی ڕاگیرا .
 
@ShEx0mBots
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
]);
}
}

$idBot = $idBot;
$idleft = $update->message->left_chat_member->id;
$idbot = bot('getme',['d'])->result->id;
$sudo = $sudo;

if($update->message->left_chat_member and $idleft==$idbot){
bot("sendMessage",[
"chat_id"=>$sudo,
"text"=>"
📛| قام شخص بطرد البوت من المجموعه الاتيه :
🏷| ألايدي : $chat_id
🗯| الـمجموعه : $title

📮| تـم مسح كل بيانات المجموعه بنـجاح
",
'reply_to_message_id'=>$mid,
  'parse_mode'=>'html',
'disable_web_page_preview'=>true,
]);
}

$mid = $message->message_id;

if($message->new_chat_members){
bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}
$SA3ED = explode("\n",file_get_contents("SAEED.txt"));
$SAEED = count($SA3ED)-1;
$T4TTTT = file_get_contents("XTXTK.txt");
if ($update && !in_array($chat_id, $SA3ED)) {
    file_put_contents("SAEED.txt", $chat_id."\n",FILE_APPEND);
  }
if($text == "المشتركين" and $chat_id == $SAEEDFiles){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"❖￤ { $SAEED } بەژداربوان ؛ 👥"
    ]);
}
if($text == "" and $chat_id == $SAEEDFiles){
 file_put_contents("XTXTK.txt", "SAEED");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"❖￤نامەکە ڕۆی { $SAEED } بەژداربوان ؛ 📬"
    ]);
}
if($text != "" and $T4TTTT == "SAEED" and $chat_id == $SAEEDFiles){
  for ($i=0; $i < count($SA3ED); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$SA3ED[$i],
      'text'=>$text,
    ]);
  }
  unlink("XTXTK.txt");
}
