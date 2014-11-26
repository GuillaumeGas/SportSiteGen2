<?php

global $smarty;

$coms = NewsCom::getAll();
$smarty->assign("Coms", $coms);


?>