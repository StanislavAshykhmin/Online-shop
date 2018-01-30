<?php


namespace Controllers;

use Models\Category;
use Models\Product;

class SiteController
{
    public function actionIndex()
    {

        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(12);


        require_once (ROOT  .  '/views/site/index.php');

        return true;

    }
}