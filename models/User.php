<?php


class User
{


    public static function checkPassword($password) {
        if (strlen($password) >=4){
            return true;
        }
        return false;
    }

    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }

    public static function checkUserData($email, $password) {
        $em = 'test@test.com';
        $pass = 'test';
        if ($email == $em && $password == $pass){
            return true;
        }else
            return false;
    }

    public static function auth($userId)
    {
        session_start();
        $_SESSION['user'] = $userId;
        }

    public static function checkLogged()
    {
        session_start();
        //Если сессия есть, вернем индетификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        header("Location: /user/login");
    }

    }

