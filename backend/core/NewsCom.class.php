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





}

?>