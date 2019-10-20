<?php

use Google\Transit\Realtime\FeedMessage;

require '../vendor/autoload.php';

$pbfContent = file_get_contents('ExampleAlert.pb');
$feedMessage = new FeedMessage();
$feedMessage->mergeFromString($pbfContent);

file_put_contents('ExampleAlert.json', json_encode(json_decode($feedMessage->serializeToJsonString()), JSON_PRETTY_PRINT));