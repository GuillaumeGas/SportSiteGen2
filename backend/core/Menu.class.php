<?php

class Menu {

    /**
     * @brief get all elements of the menu
     * @return array
     */
    public static function getAll() {
        global $bdd;

        $query = $bdd->prepare("SELECT * FROM menu_admin ORDER BY position");
        $query->execute();

        return $query->fetchAll();
    }

    /**
     * @brief disable the element
     * @param $id
     * @return bool
     */
    public static function disable($id) {
        global $bdd;
        $query = $bdd->prepare("UPDATE menu_admin SET disabled = 1 WHERE id = :id");
        return $query->execute(array(":id" => $id));
    }

    /**
     * @brief enable the element
     * @param $id
     * @return bool
     */
    public static function enable($id) {
        global $bdd;
        $query = $bdd->prepare("UPDATE menu_admin SET disabled = 0 WHERE id = :id");
        return $query->execute(array(":id" => $id));
    }

    /**
     * @brief tell us if an element is enabled or not
     * @param $id
     * @return true or false
     */
    public static function isEnabled($id) {
        global $bdd;
        $query = $bdd->prepare("SELECT disabled FROM menu_admin WHERE id = :id");
        $query->execute(array(":id" => $id));
        $res = $query->fetch();
        return $res['disabled'];
    }

    /**
     * @brief modify the position attribute of an element of the menu
     * @param $id
     * @param $position
     * @return bool
     */
    public static function setPosition($id, $position) {
        global $bdd;
        $query = $bdd->prepare("UPDATE menu_admin SET position = :position WHERE id = :id");
        return $query->execute(array(":position" => $position, ":id" => $id));
    }


    /**
     * @brief delete an element of the menu
     * @param $id
     * @return bool
     */
    public static function del($id) {
        global $bdd;
        $query = $bdd->prepare("DELETE FROM menu_admin WHERE id = :id");
        return $query->execute(array(":id" => $id));
    }

    public static function add($title, $name_fonctionnality, $disabled, $position) {
        global $bdd;
        $query = $bdd->prepare("INSERT INTO menu_admin VALUES(NULL, :title, :name_fonc, :disabled, :position)");
        return $query->execute(array(":title" => $title, ":name_fonc" => $name_fonctionnality, ":disabled" => $disabled, ":position" => $position));
    }

}

?>