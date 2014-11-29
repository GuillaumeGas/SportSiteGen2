<?php

include("./config/config_init.php");

//we call the php file in terms of the action
if(isset($_GET['action']) && file_exists(_CTRL_.'actions/'.str_replace('.', '', $_GET['action']).".php")) {
    include(_CTRL_.'actions/'.str_replace('.', '', $_GET['action']).".php");
}

//we call the php file in terms of the page
if(isset($_GET['page']) && file_exists(_CTRL_.str_replace('.', '', $_GET['page']).".php")) {
    include(_CTRL_.str_replace('.', '', $_GET['page']).".php");
    $smarty->assign("CurrentPage", $_GET['page']);
} else {
    include(_CTRL_."home.php");
    $smarty->assign("CurrentPage", "home");
}

//we display templates
$smarty->display(_TPL_."header.tpl");

if(isset($_GET['page']) && file_exists(_TPL_.str_replace('.', '', $_GET['page']).".tpl")) {
    $smarty->display(_TPL_.str_replace('.', '', $_GET['page']).".tpl");
} else {
    $smarty->display(_TPL_."home.tpl");
}

$smarty->display(_TPL_."footer.tpl");


?>