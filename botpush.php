<?php



require "vendor/autoload.php";

$access_token = 'OwVf24sFZEpQeY0lDQoTTOvCLWc9eZI+8M2Ofq+5fvAghrG0++gqfS8djt6Rrr1rVKEw36Hq4Zu7B1gCay+ZH1cmeg/ZENxEt3r3+MCIKpUAYbnAGtLgfP4NQFoseKFBGulB1PKVydDt943PuEX8ZgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'aa57db0a9b1b63f26f1471188607e231';

$pushID = 'U7634b7c4b1841c49db3e715782b958db';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







