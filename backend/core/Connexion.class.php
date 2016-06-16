<?php

require_once("utils/Login.class.php");

class Connexion {
    public static function connect() {
        global $bdd;

        //objet permettant la connexion
        $l = new Login("index.php", "utilisateur", $bdd, true);
        $l->addChamp("Login", "Pseudo", "text");
        $l->addChamp("Mdp", "Mdp", "password", true);

        $l->login();

        //si des données ont été envoyées...
        if($l->connexion_ok()) {
            $right = UserType::getFromId($_SESSION['admin']['IdTypeUser']);

            //c'est bien un administrateur
            if ($right) {
                if ($right['Nom'] == "Administrateur") {
                    return true;
                } else {
                    unset($_SESSION);
                    return false;
                }
            }
        } else {
            return false;
        }
    }
}