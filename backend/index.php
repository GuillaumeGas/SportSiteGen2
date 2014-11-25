<?php

include("./config/config_init.php");

//we call the php file in terms of the page
if(isset($_GET['page']) && file_exists(_CTRL_.str_replace('.', '', $_GET['page']).".class.php")) {
    include(_CTRL_.str_replace('.', '', $_GET['page']).".php");
} else {
    include(_CTRL_."home.php");
}

//we display templates
$smarty->display(_TPL_."header.tpl");

if(isset($_GET['page']) && file_exists(_CTRL_.str_replace('.', '', $_GET['page']).".tpl")) {
    $smarty->display(_TPL_.str_replace('.', '', $_GET['page']).".tpl");
} else {
    $smarty->display(_TPL_."home.tpl");
}

$smarty->display(_TPL_."footer.tpl");


?>