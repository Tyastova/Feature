<?php

use App\models\Price;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$priceServices = Price::price();
$sizes = Price::sizes();

require_once $_SERVER['DOCUMENT_ROOT'] . '/views/price/price.view.php';
