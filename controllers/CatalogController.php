<?php

namespace Controllers;
use Models\Category;
use Models\Product;


class CatalogController
{

    public function actionIndex()
    {

        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(1);


        require_once (ROOT  .  '/views/catalog/index.php');

        return true;

    }

}