<?php
use Models\Product;
?>
<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id'];?>"
                                           class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"
                                        >
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><a href="/product/<?php echo $product['id'];?>">
                                        <?php echo $product['name'];?>
                                    </a></h2>
                                <p>Код товара: <?php echo $product['code'];?></p>
                                        <span>
                                            <span><?php echo $product['price'];?>$</span>
                                        </span>

                                <p><button type="button" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>">
                                        <i class="fa fa-shopping-cart"></i>
                                        В корзину
                                    </button></p>
                                <p><b>Наличие:</b> На складе</p>
                                <p><b>Состояние:</b> Новое</p>
                                <p><b>Производитель:</b> <?php echo $product['brand'];?></p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>Описание товара</h5>
                            <?php echo $product['description'];?>
                        </div>
                    </div>
                </div><!--/product-details-->
                <?php foreach ($reviews as $review): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <?php echo $review['user_name'];?>: <?php echo $review['user_comment'];?>
                                <br>
                                <?php echo $review['date'];?>

                            </h4>
                        </div>
                    </div>
                <?php endforeach; ?>


    <div class="container">
        <?php if ($result): ?>

            <p><?php echo $text; ?></p>

        <?php else: ?>
            <div class="col-sm-12">
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="col-sm-12">
                    <form action="" method="post">

                        <div class="row justify-content-md-center">
                            <div class="col-md-9 mb-3">
                                <label >Ваше имя</label>
                                <input type="text" name="name" class="form-control"  placeholder="Имя"  value="<?php echo $userName; ?>" required>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-9 mb-3">
                                <label >Ваш e-mail</label>
                                <input type="email" name="email" class="form-control"  placeholder="Е-mail" value="<?php echo $userEmail; ?>"  required>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-9 mb-3">
                                <label >Введите сообщение</label>
                                <textarea type="text" name="content" class="form-control"  placeholder="Сообщение" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <button class="btn btn-primary" name="submit" type="submit">Оставить отзыв</button>
                        </div>
                    </form>
                </div>
            </div>

        <?php endif; ?>
    </div>
            </div>
        </div>
    </div>
</section>


<br/>
<br/>


<?php include ROOT . '/views/layouts/footer.php'; ?>