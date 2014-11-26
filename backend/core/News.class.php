<?php

class News {

    public static function getAll() {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM news");
        $query->execute();
        return $query->fetchAll();
    }

    public static function getFromId($id) {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM news WHERE id = :id");
        $query->execute(array(":id" => $id));
        return $query->fetch();
    }

}

?>