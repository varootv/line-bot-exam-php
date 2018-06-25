<?php



require "vendor/autoload.php";

$access_token = 'Ta1HxPigYND8dmGCg/JDZwZ2x7xqcC8m6+SbWAUUnjsudT1yl3GWLlU5vHLH47uTW4CNsYLvwxsiDXRs/i4kvOAS9ab/yJGvVOtH9S3FBCvFxonlRouiPXX2z/uRduGMUzMO2bh2rWoC4fCNimXPtgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'cbcee4c8e50f250c3fd0c4e54889dde8';

$pushID = 'U735193e503fe74ace598c7c1b15eb9d0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







