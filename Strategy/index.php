<?php

namespace Strategy;

use Strategy\Payments;
use Strategy\QiwiComparator;
use Strategy\YandexComparator;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Strategy/', '', $className);
    require_once __DIR__ . $className . '.php';
});
$pay = 200;
$collection = new Payments();
$elements = $collection->pay(new QiwiComparator(), $pay);
$elements = $collection->pay(new YandexComparator(), $pay);
