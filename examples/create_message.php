<?php

use Google\Transit\Realtime\Alert;
use Google\Transit\Realtime\EntitySelector;
use Google\Transit\Realtime\FeedEntity;
use Google\Transit\Realtime\FeedHeader;
use Google\Transit\Realtime\FeedMessage;
use Google\Transit\Realtime\TimeRange;
use Google\Transit\Realtime\TranslatedString;
use Google\Transit\Realtime\TranslatedString\Translation;

require '../vendor/autoload.php';

// create message header
$messageHeader = new FeedHeader();
$messageHeader->setGtfsRealtimeVersion('2.0');
$messageHeader->setTimestamp(time());


// create one alert body
$alert = new Alert();

$alert->setActivePeriod([
    new TimeRange(['start' => time()])
]);

$alert->setInformedEntity([
    new EntitySelector(['stop_id' => 1]),
    new EntitySelector(['stop_id' => 2])
]);

$alert->setCause(Alert\Cause::OTHER_CAUSE);
$alert->setEffect(Alert\Effect::OTHER_EFFECT);

$alert->setHeaderText(new TranslatedString([
    'translation' => [
        new Translation([
            'text' => 'Test-Message',
            'language' => 'de'
        ]
    )]
]));

$alert->setDescriptionText(new TranslatedString([
    'translation' => [
        new Translation([
            'text' => 'TEST MESSAGE',
            'language' => 'de'
        ]
    )]
]));

// create alert entity
$messageEntity = new FeedEntity();
$messageEntity->setId(125522);
$messageEntity->setAlert($alert);

// create feed message
$feedMessage = new FeedMessage();
$feedMessage->setHeader($messageHeader);
$feedMessage->setEntity([$messageEntity]);

file_put_contents('ExampleAlert.pb', $feedMessage->serializeToString());
