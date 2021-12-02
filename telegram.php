<?
//https://api.telegram.org/bot2098499675:AAHJaWNZMuXAv-xlUoDmba7FTVvgNAQwDtU/getUpdates

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$number = $_POST['user_num'];
$message = $_POST['user_message'];
$token = '2098499675:AAHJaWNZMuXAv-xlUoDmba7FTVvgNAQwDtU';
$chat_id = '-749641826';

$arr = array(
    'Foydalanuvchi ismi: ' => $name,
    'Email manzili: ' => $email,
    'Telefon raqami:' => $number,
    'Xabarnoma:' => $message
);

foreach($arr as $key => $value):
    $text .= $key . $value . "%0A";
endforeach;

$telegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_emode=html&text={$text}","r");


if($telegram){
    header('Location: index.html');
}else{
    echo "Error";
}
?>