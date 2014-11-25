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
?>