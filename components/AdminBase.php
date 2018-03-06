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

}