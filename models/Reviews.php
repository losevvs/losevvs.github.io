<?php

class Reviews {

    /**
     *  Return single reviews item width specified id
     * @param integer $id
     */
    public static function getReviewsItemById($id){
        $id = intval($id);
        if ($id) {

            $db = Db::getConnection();

            $result = $db->query('SELECT * from reviews WHERE id=' . $id);

            //$result->setFetchMode(PDO::FETCH_NUM); //если массив хотим получить в виде номеров
            $result->setFetchMode(PDO::FETCH_ASSOC); //если массив хотим получить в виде названий

            $reviewsItem = $result->fetch();

            return $reviewsItem;

        }
        //запрос к БД
    }

    /**
     * Returns an array of reviews item
     */
    public static function getReviewsList(){

        $db = Db::getConnection();

        $reviewsList = array();

        $result = $db->query('SELECT id, title, date, author_name, short_content FROM reviews ORDER BY date DESC LIMIT 10');

        $i = 0;
        if ($result = $db->query('SELECT id, title, date, author_name, short_content FROM reviews ORDER BY date DESC LIMIT 10')) {
            while ($row = $result->fetch()) {
                $reviewsList[$i]['id'] = $row['id'];
                $reviewsList[$i]['title'] = $row['title'];
                $reviewsList[$i]['date'] = $row['date'];
                $reviewsList[$i]['author_name'] = $row['author_name'];
                $reviewsList[$i]['short_content'] = $row['short_content'];
                $i++;
            }
        }

        return $reviewsList;
    }
}
