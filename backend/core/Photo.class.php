<?php

class Photo {
    public static function getAll() {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM photo");
        $query->execute();
        return $query->fetchAll();
    }
}