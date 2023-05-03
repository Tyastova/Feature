<?php

namespace App\models;

use App\helpers\Connection;

class Style
{
    public static function styles()
    {
        $query = Connection::make()->query("SELECT id, photo, title, description FROM styles");
        return $query->fetchAll();
    }

    public static function style($id)
    {
        $query = Connection::make()->prepare("SELECT id, description FROM styles WHERE styles.id = :id");
        $query->execute(["id" => $id]);
        return $query->fetchAll();
    }


    public static function getAllproductsByStyle($id)
    {

        $query = Connection::make()->prepare("SELECT styles.id, styles.title, styles.description as description, tattoos.photo as photoOne FROM styles INNER JOIN tattoos ON tattoos.style_id = styles.id WHERE styles.id = :style_id");
        $query->execute(["style_id" => $id]);
        return $query->fetchAll();
    }

    public static function stylesOne($id)
    {
        $query = Connection::make()->prepare("SELECT styles.title, styles.id, tattoos.photo as photoOne, styles.description as description FROM styles INNER JOIN tattoos ON tattoos.style_id = styles.id WHERE styles.id = :style_id");
        $query->execute(["style_id" => $id]);
        return $query->fetchAll();
    }

    public static function find($id)
    {
        $query = Connection::make()->prepare("SELECT * FROM styles WHERE styles.id = :id");
        $query->execute(["id" => $id]);
        return $query->fetch();
    }

    public static function deleteStyle($id)
    {
        $query = Connection::make()->prepare("DELETE FROM styles WHERE id = :id");
        $query->execute(["id" => $id]);
        return "delete";
    }

    public static function redacteProduct($id, $photo, $description)
    {
        $query =  Connection::make()->prepare('UPDATE styles SET photo = :photo, description = :description WHERE styles.id = :id');

        $query->execute([
            'id' => $id,
            'photo' => $photo,
            'description' => $description
        ]);
    }

    public static function addProduct($title, $photo, $description)
    {

        $query =  Connection::make()->prepare('INSERT INTO styles (title, photo, description) VALUES (:title, :photo, :description)');
        $query->execute([
            'title' => $title,
            'photo' => $photo,
            'description' => $description
        ]);

        return Connection::make()->lastInsertId();
    }
}
