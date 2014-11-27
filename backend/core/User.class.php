<?php

class User {

    /**
     * @brief returns all users
     * @return array
     */
    public static function getAll() {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM users");
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * @brief returns a user in terms of his id
     * @param $id_user
     * @return mixed
     */
    public static function getFromId($id_user) {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM users WHERE id = :id_user");
        $query->execute(array(":id_user" => $id_user));
        return $query->fetch();
    }

}

?>