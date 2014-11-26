<?php

class News {

    /**
     * @brief get all news
     * @return array : all news
     */
    public static function getAll() {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM news");
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * @brief get the news with a specific id
     * @param $id of the news
     * @return mixed : an array with the news, or false if error
     */
    public static function getFromId($id) {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM news WHERE id = :id");
        $query->execute(array(":id" => $id));
        return $query->fetch();
    }

    /**
     * @brief return news starting with val
     * @param $val
     * @return array
     */
    public static function getNewsLike($val) {
        global $bdd;
        $val .= '%';
        $query = $bdd->prepare("SELECT * FROM news WHERE titre LIKE :val ORDER BY id DESC");
        $query->execute(array(":val" => $val));
        return $query->fetchAll();
    }

}

?>