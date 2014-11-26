<?php

global $smarty;

NewsCom::del(1);

$coms = NewsCom::getAll();
$smarty->assign("Coms", $coms);

$c = NewsCom::getFromId(1);
$smarty->assign("c", $c);

?>