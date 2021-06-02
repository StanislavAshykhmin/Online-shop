<?php


namespace Models;


class Reviews
{  
    public static function saveComment($userName, $userEmail, $userContent, $userId, $productId){

        $db = \Db::getConnection();

        $sql = 'INSERT INTO reviews (user_name, user_email, user_comment, user_id, product_id) '
            . 'VALUES (:user_name, :user_email, :user_comment, :user_id, :product_id)';

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, \PDO::PARAM_STR);
        $result->bindParam(':user_email', $userEmail, \PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userContent, \PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, \PDO::PARAM_STR);
        $result->bindParam(':product_id', $productId, \PDO::PARAM_STR);

        return $result->execute();
    }

    public static function getReviewsById($productId){
        $db = \Db::getConnection();

        $reviewsList = array();

        $result = $db->query('SELECT user_name, user_comment, date FROM reviews '
            . 'WHERE product_id = "'. $productId.'" ORDER BY date ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $reviewsList[$i]['user_name'] = $row['user_name'];
            $reviewsList[$i]['user_comment'] = $row['user_comment'];
            $reviewsList[$i]['date'] = $row['date'];
            $i++;
        }

        return $reviewsList;
    }

}