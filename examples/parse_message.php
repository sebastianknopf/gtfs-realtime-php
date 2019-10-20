<?php

use Google\Transit\Realtime\FeedMessage;

require '../vendor/autoload.php';

$pbfContent = file_get_contents('YOUR FEED URL HERE');
$feedMessage = new FeedMessage();
$feedMessage->mergeFromString($pbfContent);

foreach ($feedMessage->getEntity() as $entity) {
    if ($entity->getTripUpdate() != null) {
        echo "trip: " . $entity->getId() . "\n";
    }

    if ($entity->getAlert() != null) {
        echo "alert: " . $entity->getId() . "\n";
    }

    if ($entity->getVehicle() != null) {
        echo "vehicle: " . $entity->getId() . "\n";
    }
}