<?php

if(isset($_GET['id'])) {
    if(isset($_GET['disabled'])) {
        if($_GET['disabled'] == 1) {
            if(!Menu::enable($_GET['id'])) {
                Message::error("Error.");
            }
        } else {
            if(!Menu::disable($_GET['id'])) {
                Message::error("Error.");
            }
        }
    } else if(isset($_GET['up'])) {
        $menu = Menu::getAll();

        $i = 0;
        while($menu[$i+1]['id'] != $_GET['id']) {
            $i++;
            if($i >= count($menu)-1) {
                break;
            }
        }

        if($i < count($menu)-1) {
            $tmp = $menu[$i];
            $menu[$i] = $menu[$i+1];
            $menu[$i+1] = $tmp;

            $menu[$i]['position']--;
            $menu[$i+1]['position']++;

            Menu::setPosition($menu[$i]['id'], $menu[$i]['position']);
            Menu::setPosition($menu[$i+1]['id'], $menu[$i+1]['position']);
        }
    } else if(isset($_GET['down'])) {
        Message::info("ok");
    } else if(isset($_GET['delete'])) {
        Message::info("ok");
    }
}

?>