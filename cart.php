<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Корзина</title> 
        <link href="bootstrap.min.css" rel="stylesheet"> 
        <link href="style.css" rel="stylesheet">
        <link href="cart.css" rel="stylesheet">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +38 095 10 72 052</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> ashykhminstanislav@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-skype"></i>Skype</a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i>Google</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.html"><img src="" alt="" >Логотип</a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav"> 
                                    <li class="search_box">
                                        <input type="search">
                                    </li>                                   
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
                                    <!--<li><a href="#"><i class="fa fa-user"></i> Аккаунт</a></li>-->
                                    <li><a href="#"><i class="fa fa-lock"></i> Регистрация</a></li>
                                    <li><a href="#"><i class="fa fa-lock"></i> Вход</a></li>
                                    <!--<li><a href="#"><i class="fa fa-lock"></i> Выход</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="index.html">Главная</a></li>
                                    <li><a href="#">Каталог товаров</a></li> 
                                    <li><a href="#">О магазине</a></li>
                                    <li><a href="#">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
            
        </header><!--/header-->

        <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="index.html">Главная</a></li>
                  <li class="active">Корзина</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Товар</td>
                            <td class="description"></td>
                            <td class="price">Цена</td>
                            <td class="quantity">Количество</td>
                            <td class="total">Итог</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cart_product">
                                <a href="product_detailis.html"><img src="logo-apple.jpg" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="product_detailis.html">Apple</a></h4>
                                <p>Код товара: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>99$</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">99$</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td class="cart_product">
                                <a href="product_detailis.html"><img src="logo-apple.jpg" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="product_detailis.html">Apple</a></h4>
                                <p>Код товара: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>99$</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">99$</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart_product">
                                <a href="product_detailis.html"><img src="logo-apple.jpg" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="product_detailis.html">Apple</a></h4>
                                <p>Код товара: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>99$</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">99$</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <footer id="footer"><!--Footer-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2017</p>
                        <p class="pull-right">by Stanislav Ashykhmin</p>
                    </div>
                </div>
            </div>
        </footer><!--/Footer-->
        
    </body>
</html>
