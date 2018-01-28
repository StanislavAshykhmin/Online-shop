<?php
/**
 * Created by PhpStorm.
 * User: stanislav
 * Date: 28.01.18
 * Time: 11:50
 */

namespace Controllers;


class SiteController
{
    public function actionIndex()
    {


        require_once (ROOT  .  '/views/site/index.php');

        return true;
        
    }
}