<?php

global $smarty;

$coms = NewsCom::getAll();
$smarty->assign("Coms", $coms);

$c = NewsCom::getFromId(1);
$smarty->assign("c", $c);

?>