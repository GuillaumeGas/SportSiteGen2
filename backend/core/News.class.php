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
    public static function getLike($val) {
        global $bdd;
        $val .= '%';
        $query = $bdd->prepare("SELECT * FROM news WHERE title LIKE :val ORDER BY id DESC");
        $query->execute(array(":val" => $val));
        return $query->fetchAll();
    }

    /**
     * @brief Adds a news
     * @param $title
     * @param $text
     * @param $date
     * @param $author
     * @param $id_photo
     * @return bool
     */
    public static function add($title, $text, $date, $author, $id_photo) {
        global $bdd;
        $query = $bdd->prepare("INSERT INTO news VALUES(NULL, :title, :date, :text, :id_photo, :author)");
        return $query->execute(array(":title" => $title,
                                     ":date"  => $date,
                                     ":text"  => $text,
                                     ":id_photo" => $id_photo,
                                     ":author" => $author));
    }

    /**
     * @brief to modify a news
     * @param $id_news
     * @param $title
     * @param $text
     * @param $date
     * @param $author
     * @param $id_photo
     * @return bool
     */
    public static function set($id_news, $title, $text, $date, $author, $id_photo) {
        global $bdd;
        $query = $bdd->prepare("UPDATE news SET title = :title, date = :date, text = :text, idPhoto = :id_photo, author = :author WHERE id = :id_news");
        return $query->execute(array(":title" => $title,
                                     ":date"  => $date,
                                     ":text"  => $text,
                                     ":id_photo" => $id_photo,
                                     ":author"   => $author,
                                     ":id_news"  => $id_news));
    }

    /**
     * @brief to delete a news
     * @param $id_news
     * @return bool
     */
    public static function del($id_news) {
        global $bdd;
        $query = $bdd->prepare("DELETE FROM news WHERE id = :id_news");
        return $query->execute(array(":id_news" => $id_news)) == 0;
    }

}

?>