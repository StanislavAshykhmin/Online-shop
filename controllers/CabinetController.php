<?php
namespace Controllers;

use Models\User;
use Components\Validator;

class CabinetController
{

    public function actionIndex()
    {
        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        require_once (ROOT . '/views/cabinet/index.php');

        return true;
    }

    public function actionEdit()
    {
        $userId = User::checkLogged();
        
        $user = User::getUserById($userId);

        $name = $user['name'];
        $password = $user['password'];

        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];

        }

        $errors = false;

        // Валидация полей
        if (!Validator::checkName($name)) {
            $errors[] = 'Имя не должно быть короче 2-х символов';
        }
        if (!Validator::checkPassword($password)) {
            $errors[] = 'Пароль не должен быть короче 8-и символов';
        }
        if ($errors ==  false){
            $result = User::edit($userId, $name, $password);
        }

        require_once (ROOT . '/views/cabinet/edit.php');

        return true;

    }
}