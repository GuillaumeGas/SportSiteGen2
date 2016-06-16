<?php

class Template {
    /**
     * @brief get all templates name
     * @return array of string
     */
    public static function getAll() {
        $dir = scandir(_FRONT_.'/templates');
        $list = array();
        foreach ($dir as $d) {
            if (strcmp($d, ".") != 0 && strcmp($d, "..") != 0) {
                $list[] = $d;
            }
        }
        return $list;
    }

    /**
     * @brief get current template
     */
    public static function getCurrent() {
        global $bdd;
        $query = $bdd->prepare("SELECT current_template FROM site");
        $query->execute();
        return $query->fetch()['current_template'];
    }

    /**
     * @brief set current template
     */
    public static function setCurrent($name) {
        global $bdd;
        $query = $bdd->prepare("UPDATE site SET current_template = :name");
        return $query->execute(array("name" => $name));
    }
}