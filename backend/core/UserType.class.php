<?php

class UserType {

    /**
     * @brief return all user types
     * @return array all user types
     */
    public static function getAll() {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM type_utilisateur");
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * @brief return a user type
     * @param $id user type's id
     * @return a user type
     */
    public static function getFromId($id) {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM type_utilisateur WHERE Id = :id");
        $query->execute(array(":id" => $id));
        return $query->fetch();
    }
}