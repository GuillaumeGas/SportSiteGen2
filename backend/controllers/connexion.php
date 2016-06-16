<?php

global $smarty;

if (isset($_POST['Pseudo']) && isset($_POST['Mdp'])) {
    if (Connexion::connect()) {
        $_SESSION['admin_connected'] = true;
        header("Location: index.php");
    } else {
        $smarty->assign("Err", "Connexion refusée.");
    }
}