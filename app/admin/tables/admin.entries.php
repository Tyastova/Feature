<?php

use App\models\Entry;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

$entries = Entry::application();

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/views/admin.entries.view.php";
