<?php

class News {

    public static function getAll() {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM news");
        $query->execute();
        return $query->fetchAll();
    }


}

?>