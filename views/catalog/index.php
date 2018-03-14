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
                                        <a href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a></h4>
                                </div>
                            </div>
                        <?php endforeach;?>
                        <br>
                        <form  method="post">
                            <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                    <div class="custom-select mr-sm-6" id="inlineFormCustomSelect">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Отсортировать по:</label>
                                        <select name="sort">
                                            <option  value = "id_ASC">Дата по возростанию</option>
                                            <option   value = "id_DESC">Дата по убыванию</option>
                                            <option  value = "price_ASC">Цена по возростанию</option>
                                            <option  value = "price_DESC">Цена по убыванию</option>
                                        </select>
                                        <input type="submit" name="submit" class="btn btn-primary" required value="Сортировать">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"><?php echo $text;?></h2>
                    <?php foreach ($latestProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                        <h2><?php echo $product['price'];?>$</h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                        </p>
                                        <a href="#" data-id="<?php echo $product['id'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div><!--features_items-->



            </div>
        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/footer.php'; ?>
