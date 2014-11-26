<?php

class NewsCom {

    /**
     * @brief get all coms
     * @return array
     */
    public static function getAll() {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM news_com");
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * @brief get a com with a specified id
     * @param $id_com
     * @return mixed
     */
    public static function getFromId($id_com) {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM news_com WHERE id = :id_com");
        $query->execute(array(":id_com" => $id_com));
        return $query->fetch();
    }

    /**
     * @brief add a com
     * @param $text
     * @param $date
     * @param $id_news
     * @param $id_user
     * @return bool
     */
    public static function add($text, $date, $id_news, $id_user) {
        global $bdd;
        $query = $bdd->prepare("INSERT INTO news_com VALUES(NULL, :text, :date, :id_news, :id_user)");
        return $query->execute(array(":text" => $text,
                              ":date" => $date,
                              ":id_news" => $id_news,
                              ":id_user" => $id_user));
    }

    /**
     * @brief modify a com
     * @param $id_com
     * @param $text
     * @param $date
     * @param $id_news
     * @param $id_user
     * @return bool
     */
    public static function set($id_com, $text, $date, $id_news, $id_user) {
        global $bdd;
        $query = $bdd->prepare("UPDATE news_com SET text = :text, date = :date, idNews = :id_news, idUser = :id_user WHERE id = :id_com");
        return $query->execute(array(":text" => $text,
                              ":date" => $date,
                              ":id_news" => $id_news,
                              ":id_user" => $id_user,
                              ":id_com"  => $id_com));
    }

    /**
     * @brief delete a com
     * @param $id_com
     * @return bool
     */
    public static function del($id_com) {
        global $bdd;
        $query = $bdd->prepare("DELETE FROM news_com WHERE id = :id_com");
        return $query->execute(array(":id_com" => $id_com));
    }
}

?>