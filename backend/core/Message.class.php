<?php

class Message {
    public static function info($message) {
        global $smarty;
        $smarty->assign("TypeMessage", "info");
        $smarty->assign("Message", $message);
    }

    public static function error($message) {
        global $smarty;
        $smarty->assign("TypeMessage", "error");
        $smarty->assign("Message", $message);
    }
}

?>