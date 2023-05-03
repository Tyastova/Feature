<?php

namespace App\models;

use App\helpers\Connection;

class Admin
{
    public static function insert($data)
    {
        $create = Connection::make()->prepare("INSERT into admins ( login, password) values ( :login, :password)");
        return $create->execute([
            "login" => $data["login"],
            "password" => password_hash($data["password"], PASSWORD_DEFAULT),
        ]);
    }

    public static function getAdmin($login, $password)
    {
        $query = Connection::make()->prepare("SELECT * FROM admins WHERE admins.login = :login");
        $query->execute([
            ':login' => $login
        ]);
        $admin = $query->fetch();
        if (password_verify($password, $admin->password)) {
            return $admin;
        } else return null;

    }

    public static function findLogin($login)
    {
        $query = Connection::make()->prepare("SELECT id, login FROM admins WHERE admins.login = ? ");
        $query->execute([$login]);
        $res = $query->fetchAll();
        return !empty($res);
    }

    public static function find($id)
    {
        $query = Connection::make()->prepare("SELECT * FROM admins WHERE admins.id = :adminID");
        $query->execute(['adminID' => $id]) ;
        $res = $query->fetch();
        return $res;
    }

}
