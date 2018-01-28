<?php


namespace Controllers;

use Models\Category;

class SiteController
{
    public function actionIndex()
    {

        $categories = array();
        $categories = Category::getCategoriesList();


        require_once (ROOT  .  '/views/site/index.php');

        return true;

    }
}