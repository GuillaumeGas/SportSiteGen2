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



}

?>