<?php

use App\models\Master;
use App\models\Price;
use App\models\Section;
use App\models\Style;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php'; 

$sections = Section::all();
$masters = Master::mastera();
$sizes = Price::sizes();
$stylesTattoo = Style::styles();
$priceServices = Price::price();

require_once $_SERVER['DOCUMENT_ROOT'] . '/views/contact/contact.view.php';
