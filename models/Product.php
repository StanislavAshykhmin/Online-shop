<?php


namespace Models;


class Product
{

    const SHOW_BY_DEFAULT = 6;

    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);

        $db = \Db::getConnection();

        $productsList = array();

        $result = $db->query('SELECT id, name, price, is_new FROM product '
            . 'WHERE status = "1"'
            . 'ORDER BY id DESC '
            . 'LIMIT ' . $count);

        $i = 0;


        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $productsList;
    }

    public static function getProductsList()
    {
        $db = \Db::getConnection();

        $result = $db->query('SELECT id, name, price, code FROM product ORDER BY id ASC');
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }
        return $productsList;
    }

    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = \Db::getConnection();

            $result = $db->query('SELECT * FROM product WHERE id=' . $id);
            $result->setFetchMode(\PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }
    

    public static function getTotalProductsInCategory($categoryId)
    {
        $db = \Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM product '
            . 'WHERE status="1" AND category_id ="'.$categoryId.'"');
        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }
    

    public static function getProductsByIds($idsArray){
        $products = array();

        $db = \Db::getConnection();

        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";

        $result = $db->query($sql);
        $result->setFetchMode(\PDO::FETCH_ASSOC);

        $i  = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }
        return $products;
    }

    public static function getRecommendedProducts(){
        $db = \Db::getConnection();

        $result = $db->query('SELECT id, name, price, is_new FROM product '
            . 'WHERE status = "1" AND is_recommended = "1" '
            . 'ORDER BY id DESC');


        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }

    public static function deleteProductsById($id){
        $db = \Db::getConnection();

        $sql = 'DELETE FROM product WHERE id = :id';


        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, \PDO::PARAM_INT);
        return $result->execute();
    }



    public static function createProduct($options)
    {
        $db = \Db::getConnection();

        $sql = 'INSERT INTO product '
            . '(name, code, price, category_id, brand, availability, '
            . 'description, is_new, is_recommended, status) '
            . 'VALUES '
            . '(:name, :code, :price, :category_id, :brand, :availability, '
            . ':description, :is_new, :is_recommended, :status)';


        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], \PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], \PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], \PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], \PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], \PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], \PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], \PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], \PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], \PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], \PDO::PARAM_INT);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        return 0;
    }

    public static function updateProductById($id, $options)
    {
        $db = \Db::getConnection();

        $sql = "UPDATE product
            SET 
                name = :name, 
                code = :code, 
                price = :price, 
                category_id = :category_id, 
                brand = :brand, 
                availability = :availability, 
                description = :description, 
                is_new = :is_new, 
                is_recommended = :is_recommended, 
                status = :status
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, \PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], \PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], \PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], \PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], \PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], \PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], \PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], \PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], \PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], \PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], \PDO::PARAM_INT);
        return $result->execute();
    }
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';

        // Путь к папке с товарами
        $path = '/upload/images/products/';

        // Путь к изображению товара
        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }
}