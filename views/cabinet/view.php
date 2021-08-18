<?php
use Models\Order;
?>
<?php include ROOT .'/views/layouts/header.php';?>

<section>
    <div class="container">
        <div class="row">
            <h5>Информация о покупках</h5>

            <tr>
                <td><b>Дата заказа</b></td>
                <td><?php echo $order['date']; ?></td>
            </tr>
            <table class="table-admin-medium table-bordered table-striped table ">
                <tr>
                    <th>ID товара</th>
                    <th>Артикул товара</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Количество</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td><?php echo $productsQuantity[$product['id']]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <a href="/cabinet/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
        </div>


</section>

<?php include ROOT . "/views/layouts/footer.php"; ?>
