<?php

class News {
    /**
     *  Return single news item width specified id
     * @param integer $id
     */
    public static function getNewsItemById($id){
        $id = intval($id);
        if ($id) {

            $db = Db::getConnection();

            $result = $db->query('SELECT * from news WHERE id=' . $id);

            //$result->setFetchMode(PDO::FETCH_NUM); //если массив хотим получить в виде номеров
            $result->setFetchMode(PDO::FETCH_ASSOC); //если массив хотим получить в виде названий

            $newsItem = $result->fetch();

            return $newsItem;

        }
        //запрос к БД
    }

    /**
     * Returns an array of news item
     */
    public static function getNewsList(){

        $db = Db::getConnection();

        $newsList = array();

        $result = $db->query('SELECT id, title, date, author_name, short_content FROM news ORDER BY date DESC LIMIT 10');

        $i = 0;
        if ($result = $db->query('SELECT id, title, date, author_name, short_content FROM news ORDER BY date DESC LIMIT 10')) {
            while ($row = $result->fetch()) {
                $newsList[$i]['id'] = $row['id'];
                $newsList[$i]['title'] = $row['title'];
                $newsList[$i]['date'] = $row['date'];
                $newsList[$i]['author_name'] = $row['author_name'];
                $newsList[$i]['short_content'] = $row['short_content'];
                $i++;
            }
        }

        return $newsList;
    }
}
