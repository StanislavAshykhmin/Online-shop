<?php


namespace Controllers;
use Models\Category;
use Models\Product;
use Components\Validator;
use Models\Reviews;
use Models\User;
use phpDocumentor\Reflection\Types\Null_;

class ProductController
{


    public function actionView($productId)
    {

        $categories =  array();
        $categories = Category::getCategoriesList();

        $product = Product::getProductById($productId);
        $result = false;
        if (isset($_POST['submit'])) {

            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userContent = $_POST['content'];


            $errors = false;
            if (!Validator::checkName($userName))
                $errors[] = 'Неправильное имя';
            if (!Validator::checkEmail($userEmail))
                $errors[] = 'Неправильный email';

            

            if ($errors == false) {

                if (User::isGuest()) {
                    $userId = NULL;
                } else {
                    $userId = User::checkLogged();
                }


                $result = Reviews::saveComment($userName, $userEmail, $userContent, $userId, $productId);


                if ($result) {
                    $text  = 'Отзыв оставлен';
                }
            }
        } else {



                $userName = false;
                $userEmail = false;
                $userComment = false;


                if (User::isGuest()) {

                } else {

                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);

                    $userName = $user['name'];
                    $userEmail = $user['email'];
                }
            }

        $reviews = Reviews::getReviewsById($productId);

        require_once (ROOT . '/views/product/view.php');

        return true;
    }

}