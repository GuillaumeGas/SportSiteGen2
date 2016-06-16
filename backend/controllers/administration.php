<?php

global $smarty;

if(isset($_GET['tab'])) {
    $tab = $_GET['tab'];
    $smarty->assign("CurrentTab", $tab);

    if($tab == "menu") {
        get_menu();
    } else if ($tab == "template") {
        get_template();
    }
} else {
    get_menu();
}

function get_menu() {
    global $smarty;
    $menu = Menu::getAll();

    //we list each possible position for a new element
    $positions = array();
    foreach($menu as $elem) {
        $positions[] = $elem['position'];
    }
    $positions[] = $positions[count($positions)-1]++;

    sort($positions);

    $smarty->assign("Menu", $menu);
    $smarty->assign("Positions", $positions);
    $formMenu = $smarty->fetch(_TPL_."admin_tabs/formMenu.tpl");
    $smarty->assign("ContentTab", $formMenu);
    $smarty->assign("CurrentTab", "menu");
}

function get_template() {
    global $smarty;
    $smarty->assign("Templates", Template::getAll());
    $smarty->assign("CurrentTemplate", Template::getCurrent());
    $formTemplate = $smarty->fetch(_TPL_."admin_tabs/formTemplate.tpl");
    $smarty->assign("ContentTab", $formTemplate);
    $smarty->assign("CurrentTab", "template");
}

?>