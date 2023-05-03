<?php

namespace App\models;

use App\helpers\Connection;

class Portfolio
{
    public static function port()
    {
        $query = Connection::make()->query("SELECT photo FROM portfolios");
        return $query->fetchAll();
    }
}