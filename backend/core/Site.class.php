<?php

class Site {

    /**
     * @brief get info of the website
     * @return mixed
     */
    public static function getInfo() {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM site");
        $query->execute();
        return $query->fetch();
    }

    /**
     * @brief get website name
     * @return mixed
     */
    public static function getName() {
        global $bdd;
        $query = $bdd->prepare("SELECT name FROM site");
        $query->execute();
        return $query->fetch();
    }

    /**
     * @brief get website url
     * @return mixed
     */
    public static function getUrl() {
        global $bdd;
        $query = $bdd->prepare("SELECT url FROM site");
        $query->execute();
        return $query->fetch();
    }

    /**
     * @brief get website url
     * @return mixed
     */
    public static function getCurrentTemplate() {
        global $bdd;
        $query = $bdd->prepare("SELECT current_template FROM site");
        $query->execute();
        return $query->fetch();
    }

}

?>