<?php 

use App\models\Master;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php'; 

$masters = Master::masterShow($_GET['id']);
 
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/admin/views/admin.showMaster.view.php';