<?php
namespace Controllers;

use Models\User;

class CabinetController
{

    public function actionIndex()
    {
        $userId = User::checkLogged();

        require_once (ROOT . '/views/cabinet/index.php');

        return true;
    }
}