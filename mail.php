<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = $_POST['name'];
$phone = $_POST['phone'];
$token = "1943566471:AAH7jUlw12iPUPiyllN7BvzpTKMFO3IRfus";
$chat_id = "-1001550178611";

$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone
);
$txt="";
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id=$chat_id&parse_mode=html&text=$txt");
print_r($sendToTelegram);
?>