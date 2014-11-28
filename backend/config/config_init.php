<?php

session_start();
header("Cache-Control: no-cache");

require('defines.inc.php');
require('mysql_connect.php');//contains the bdd var
require(_PATH_.'web/tools/Smarty/libs/Smarty.class.php');

//we load the core files
$core_files = scandir(_CORE_);
foreach($core_files as $file) {
    if(is_file(_CORE_.$file))
        require_once(_CORE_.$file);
}

$smarty = new Smarty();

//we get site name, template..
$website_name = Site::getName();
$smarty->assign("SiteName", $website_name);


//TMP
$_SESSION['admin'] = array("id" => 1, "nickname" => "admin", "mail" => "admin@truc.fr", "idPhoto" => 1);
$_SESSION['admin_connected'] = true;
?>