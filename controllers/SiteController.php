<?php


namespace Controllers;

use Components\Validator;

use Models\Category;
use Models\Product;

class SiteController
{
    public function actionIndex()
    {

        $categories = array();
        $categories = Category::getCategoriesList();
        

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);

        $sliderProducts = Product::getRecommendedProducts();
        require_once (ROOT  .  '/views/site/index.php');
        
        
        
        return true;

    }
    
    

    public function actionContacts(){

        $userEmail = '';
        $userText = '';
        $result = false;

        if (isset($_POST['submit'])){

            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            $errors  = false;

            if (!Validator::checkEmail($userEmail)){
                $errors[] = 'Неправильный email';
            }
//                 Решить проблему


           if ($errors == false){
               $adminEmail = 'testlocalhost1234@gmail.com';
               $message = "Текст: {$userText}. От {$userEmail}";
               $subject = 'Тема письма';
               $result = mail($adminEmail, $subject, $message);
               $result =  true;
           }
        }

        require_once (ROOT. '/views/site/contact.php');
        return true;
    }
    public function actionAbout()
    {
        
        require_once(ROOT . '/views/site/about.php');
        return true;
    }

}