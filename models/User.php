<?php
namespace Models;

class User
{

    public static function register($name, $email, $password){
        $db = \Db::getConnection();
        $sql = 'INSERT INTO user (name, email, password) '
                . 'VALUES (:name, :email, :password)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, \PDO::PARAM_STR);
        $result->bindParam(':email', $email, \PDO::PARAM_STR);
        $result->bindParam(':password', $password, \PDO::PARAM_STR);

        return $result->execute();
    }

    public static function checkEmailExists($email){
        $db = \Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, \PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
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

