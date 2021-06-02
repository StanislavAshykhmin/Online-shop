<?php


namespace Controllers;
use Models\Product;
use Models\Category;

class SearchController
{
    public function actionIndex(){



        $text = '';
        if (isset($_POST['search'])){
            $text = $_POST['textSearch'];

        }

        $latestProducts = array();
        $latestProducts = Product::getSearchProducts($text);
        require_once (ROOT  .  '/views/site/search.php');
        return true;
    }
}