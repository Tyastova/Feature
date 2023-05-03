<?php

namespace App\models;

use App\helpers\Connection;

class Record
{
    public static function record($data)
    {
        $create = Connection::make()->prepare("INSERT INTO entries (name, number, comment, service_id, created_at, style_id, size_id, master_id) VALUES (:name, :number, :comment, :service, :data, :style, :size, :master)");

        return $create->execute([
            "name" => $data["name"],
            "number" => $data["number"],
            "comment" => $data["comment"],
            "service" => $data["service"],
            "data" => date('Y-m-d H:i:s'),
            "style" => $data["style"],
            "size" => $data["size"],
            "master" => $data["master"]
        ]);
    }
}
