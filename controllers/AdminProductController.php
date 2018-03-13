<?php

namespace controllers;

use Models\Product;
use components\AdminBase;

class AdminProductControllers extends AdminBase
{   
    public function actionIndex (){
        self::checkAdmin();
        
        $productList = Product::getProductsList();

        require_once (ROOT . '/views/admin_product/index.php');
        return true;
    }

}