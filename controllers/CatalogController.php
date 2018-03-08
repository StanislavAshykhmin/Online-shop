<?php


namespace Controllers;
use Models\Category;
use Models\Product;
use Components\Pagination;
use Components\Sort;


class CatalogController
{

    public function actionIndex()
    {

        $categories = array();
        $categories = Category::getCategoriesList();


        $sort ='id DESC';

            if (isset($_POST['id_ASC'])){$sort = 'id ASC';}
            elseif (isset($_POST['id_DESC'])){$sort = 'id DESC';}
            elseif (isset($_POST['price_ASC'])){$sort = 'price ASC';}
            elseif (isset($_POST['price_DESC'])){$sort = 'price DESC';}

        $latestProducts = array();
        $latestProducts = Sort::sort($sort);
        
        
        
        //Нужно сделать ajax!!!!!
        
        
        


        require_once (ROOT  .  '/views/catalog/index.php');

        return true;

    }



    public function actionCategory($categoryId, $page = 1)
    {
        


        $categories = array();
        $categories = Category::getCategoriesList();

        $sort ='id DESC';



        if (isset($_POST['id_ASC'])){unset($sort); $sort = 'id ASC';}
        elseif (isset($_POST['id_DESC'])){unset($sort);$sort = 'id DESC';}
        elseif (isset($_POST['price_ASC'])){unset($sort);$sort = 'price ASC';}
        elseif (isset($_POST['price_DESC'])){unset($sort);$sort = 'price DESC';}





        //Сортировка некорректно работает с пагинацией, исправить!!!







        $categoryProducts = array();
        $categoryProducts = Sort::sortCategory($categoryId, $page, $sort);

        $total = Product::getTotalProductsInCategory($categoryId);


        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }

}