<?php

namespace App\models;

use App\helpers\Connection;

class Tattoo
{

    public static function alltattoos()
    {
        $query = Connection::make()->query("SELECT * FROM tattoos");

        return $query->fetchAll();
    }

    public static function tattoos($service_id)
    {
        $query = Connection::make()->prepare("SELECT id, tattoos.photo as photo, tattoos.price as price FROM tattoos WHERE service_id = :service_id");

        $query->execute([
            "service_id" => $service_id
        ]);
        return $query->fetchAll();
    }
}
