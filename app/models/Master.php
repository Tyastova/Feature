<?php

namespace App\models;

use App\helpers\Connection;

class Master
{
    public static function mastera()
    {
        $query = Connection::make()->query("SELECT id, name, surname, photo FROM masters");
        return $query->fetchAll();
    }

    public static function masterPortfolio($id)
    {
        $query = Connection::make()->prepare("SELECT masters.name as name, masters.id as id, masters.photo as masterPhoto, portfolios.photo as photo, masters.surname as surname FROM portfolios INNER JOIN masters ON portfolios.master_id = masters.id WHERE masters.id = :master_id ");
        $query->execute(["master_id" => $id]);
        return $query->fetchAll();
    }


    public static function masterShow($id)
    {
        $query = Connection::make()->prepare("SELECT * FROM masters WHERE id = :id");
        $query->execute(["id" => $id]);
        return $query->fetch();
    }

    public static function redacteMaster($id, $name, $surname, $photo)
    {
        $query =  Connection::make()->prepare('UPDATE masters SET name = :name, photo = :photo, surname = :surname WHERE masters.id = :id ');

        $query->execute([
            "id" => $id,
            'name' => $name,
            'surname' => $surname,
            'photo' => $photo

        ]);
    }

    public static function find($id)
    {
        $query = Connection::make()->prepare("SELECT * FROM portfolios WHERE master_id = :id");
        $query->execute([":id" => $id]);
        return $query->fetchAll();
    }


    public static function redactePortPhotoMaster($id, $photo)
    {
        $query =  Connection::make()->prepare('UPDATE portfolios SET photo = :photo WHERE masters.id = :id ');

        $query->execute([
            "id" => $id,
            'photo' => $photo
        ]);
    }

    public static function deleteMasterPhotoInPort($id)
    {
        $query = Connection::make()->prepare("DELETE FROM portfolios WHERE id = :id");
        $query->execute([":id" => $id]);
        return "delete";
    }

    public static function addPhotoPort($photo, $id)
    {

        $query =  Connection::make()->prepare('INSERT INTO portfolios (photo, master_id) VALUES (:photo, :id)');
        $query->execute([
            'photo' => $photo,
            'id' => $id
        ]);
        return Connection::make()->lastInsertId();
    }
}
