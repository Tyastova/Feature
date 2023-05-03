<?php

namespace App\models;

use App\helpers\Connection;

class Entry
{
    public static function application()
    {
        $query = Connection::make()->query("SELECT entries.id, entries.name as nameKl, entries.number as number, entries.comment as comment, entries.created_at as data, masters.name as masterName, services.title as serTit, statuses.name as stname, sizes.title as size, tattoos.photo as photo, entries.tattoo_id, styles.title as style FROM entries INNER JOIN masters ON entries.master_id = masters.id INNER JOIN services ON entries.service_id = services.id INNER JOIN statuses ON entries.status_id = statuses.id INNER JOIN sizes ON entries.size_id = sizes.id LEFT JOIN tattoos ON entries.tattoo_id = tattoos.id INNER JOIN styles ON entries.style_id = styles.id ");

        return $query->fetchAll();
    }

    public static function allStatus()
    {
        $query = Connection::make()->query("SELECT * FROM statuses");

        return $query->fetchAll();
    }


    public static function redacteStatus($entries_id, $status_id, $message)
    {
        $query = Connection::make()->prepare("UPDATE entries SET status_id = :status_id, reason_cancel = :message, updated_at = :updated_at WHERE id = :entries_id");

        if ($status_id != 4) {
            $message = null;
        }

        $query->execute([
            'status_id' => $status_id,
            'message' => $message,
            'entries_id' => $entries_id,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return $query->fetch();
    }

    public static function findPhoto($id)
    {
        $query = Connection::make()->prepare("SELECT * FROM tattoos WHERE id =:id");

        $query->execute([
            'id' => $id
        ]);


        return $query->fetch();
    }

    public static function redactePhoto($entries_id, $tattoo_id, $photo)
    {
        $conn = Connection::make();
        // если картинки нет в базе тату
        if ($tattoo_id == null) {
            //добавляем тату в таблицу
            //1. нужно стиль и услуга по ее id 
            $query = $conn->prepare("SELECT style_id, service_id FROM entries WHERE id = :id");
            $query->execute([
                'id' => $entries_id
            ]);
            $entry = $query->fetch();

            //2. дбавить в таблицу тату новую запись получить айди 
            $query = $conn->prepare("INSERT INTO tattoos (photo, style_id, service_id) VALUES (:photo, :style_id, :service_id)");
            $query->execute([
                'style_id' => $entry->style_id,
                'service_id' => $entry->service_id,
                'photo' => $photo
            ]);
            $tattoo_id = $conn->lastInsertId();
        }

        $query = $conn->prepare("UPDATE entries SET tattoo_id = :tattoo_id WHERE id = :id ");
        $query->execute([
            'tattoo_id' => $tattoo_id,
            'id' => $entries_id
        ]);
    }
}
