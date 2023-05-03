<?php

namespace App\models;

use App\helpers\Connection;

class Price
{
    public static function price()
    {
        $query = Connection::make()->query("SELECT services.title, MIN(price) as price, services.id  FROM services LEFT JOIN tattoos ON service_id = services.id GROUP BY services.title, services.id");
        return $query->fetchAll();
    }

    public static function sizes()
    {
        $query = Connection::make()->query("SELECT * FROM sizes");
        return $query->fetchAll();
    }

}
