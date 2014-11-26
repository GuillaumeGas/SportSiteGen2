<?php

global $smarty;

NewsCom::set(1, "AAAA", "2014-02-03 12:12:00", 1, 1);

$coms = NewsCom::getAll();
$smarty->assign("Coms", $coms);

$c = NewsCom::getFromId(1);
$smarty->assign("c", $c);

?>