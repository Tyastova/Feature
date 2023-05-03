<?php 

use App\models\Master;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php'; 

$portMaster = Master::masterPortfolio($_GET['id']);

$masterShow = Master::masterShow($_GET['id']);

require_once $_SERVER['DOCUMENT_ROOT'] . '/views/master/master.view.php';