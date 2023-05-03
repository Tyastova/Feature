<?php

namespace App\models;

use App\helpers\Connection;


class Product
{
    public static function lastFive()
    {
        $query = Connection::make()->query("SELECT tattoos.id, tattoos.photo as photo FROM tattoos INNER JOIN entries ON entries.tattoo_id = tattoos.id ORDER BY created_at DESC LIMIT 5");
        return $query->fetchAll();
    }
}
