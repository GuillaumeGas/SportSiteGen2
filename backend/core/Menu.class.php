<?php

class Menu {

    public static function getAll() {
        global $bdd;

        $query = $bdd->prepare("SELECT * FROM menu_admin ORDER BY position");
        $query->execute();

        return $query->fetchAll();
    }

}

?>