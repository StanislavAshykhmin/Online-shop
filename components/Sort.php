<?php


namespace components;


class Sort
{

    const SHOW_BY_DEFAULT = 6;


    public static function sort($sort = 'price DESC'){


        
        $db = \Db::getConnection();

        $sortList = array();

        $result = $db->query('SELECT id, name, price, image, is_new FROM product '
            . 'WHERE status = "1"'
            . 'ORDER BY ' . $sort);

        $i = 0;


        while ($row = $result->fetch()) {
            $sortList[$i]['id'] = $row['id'];
            $sortList[$i]['name'] = $row['name'];
            $sortList[$i]['image'] = $row['image'];
            $sortList[$i]['price'] = $row['price'];
            $sortList[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $sortList;
    }


    public static function sortCategory($categoryId = false, $page = 1, $sort)
    {
        if ($categoryId) {

            $page  = intval($page);
            $offset = ($page - 1  ) * self::SHOW_BY_DEFAULT;

            $db = \Db::getConnection();
            $products = array();
            $result = $db->query("SELECT id, name, price, image, is_new FROM product "
                . "WHERE status = '1' AND category_id = '$categoryId' "
                . "ORDER BY ". $sort
                . " LIMIT ".self::SHOW_BY_DEFAULT
                . ' OFFSET '. $offset);


            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }

            return $products;
        }
    }
}