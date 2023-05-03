<?php

namespace App\models;

use App\helpers\Connection;

class Section
{
    public static function getSection($section_id)
    {
        $query = Connection::make()->prepare("SELECT content, element 
        FROM elements 
        WHERE section_id = :section_id");
        $query->execute(["section_id" => $section_id]);
        return $query->fetchAll();
    }

    public static function all()
    {
        $query = Connection::make()->query("SELECT * FROM sections");       
        return $query->fetchAll();
    }
}
