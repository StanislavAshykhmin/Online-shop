<?php

namespace Controllers;


use Models\User;
use Components\Validator;


class UserController
{

    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];



        $errors = false;

        // Валидация полей
        if (!Validator::checkName($name)) {
            $errors[] = 'Имя не должно быть короче 2-х символов';
        }
        if (!Validator::checkEmail($email)) {
            $errors[] = 'Неправильный email';
        }
        if (!Validator::checkPassword($password)) {
            $errors[] = 'Пароль не должен быть короче 8-и символов';
        }
        if (User::checkEmailExists($email)) {
            $errors[] = 'Такой email уже используется';
        }
        if ($errors ==  false){
            $result = User::register($name, $email,  $password);
        }
        }
        require_once (ROOT . '/views/user/register.php');

        return true;


    }


    public function actionLogin()
    {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            // Валидация полей
            if (!Validator::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!Validator::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 8-и символов';
            }
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);

                // Перенаправляем пользователя в закрытую часть - кабинет
                header("Location: /cabinet/");
            }

        }

        require_once(ROOT . '/views/user/login.php');

        return true;
    }

    public function actionLogout()
    {
        session_start();
        unset($_SESSION["user"]);
        header("Location: /");
//        require_once(ROOT . '/views/cabinet/index.php');
    }


}