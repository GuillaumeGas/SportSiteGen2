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
        $menu = Menu::getAll();

        $i = 0;
        while($menu[$i]['id'] != $_GET['id'] && $i < count($menu)-1) {
            $i++;
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
    } else if(isset($_GET['delete'])) {
        $menu = Menu::getAll();
        $i = 0;
        while($menu[$i]['id'] != $_GET['id'] && $i < count($menu)) { $i++; }
        for($i = $i+1; $i < count($menu); $i++) {
            Menu::setPosition($menu[$i]['id'], $menu[$i]['position']-1);
        }
        Menu::del($_GET['id']);
    }
} else {
    if(isset($_POST['title']) && isset($_POST['name']) && isset($_POST['position'])) {
        $title = htmlentities($_POST['title']);
        $url  = "index.php?page=".htmlentities($_POST['name']);
        $name_fonc  = htmlentities($_POST['name']);
        $position = $_POST['position'];

        $menu = Menu::getAll();
        if($menu[count($menu)-1]['position'] >= $position) {
            $i = 0;
            while($menu[$i]['position'] != $position && $i < count($menu)) {
                $i++;
            }
            if($i < count($menu)) {
                for(; $i < count($menu); $i++) {
                    $menu[$i]['position']++;
                    Menu::setPosition($menu[$i]['id'], $menu[$i]['position']);
                }
            }
        }
        Menu::add($title, $name_fonc, $url, 0, $position);
    } else {
        Message::error("Error when adding a new element in the menu.");
    }
}

?>