<?php


namespace components;


use Models\User;

abstract class AdminBase
{
    public static function checkAdmin(){
        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        if ($user['role'] == 'admin') {
            return true;
        }
        die('Доступ запрещен!');
    }

    public static function checkAdminText(){
        $userId = User::checkLoggedText();

        $user = User::getUserById($userId);

        if ($user['role'] == 'admin') {
            echo "<li><a href=\"/admin\"><i class=\"fa fa-edit\"></i> Админпанель</a></li>";
        }
        return false;
    }

}