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
        Message::info("ok");
    } else if(isset($_GET['down'])) {
        Message::info("ok");
    } else if(isset($_GET['delete'])) {
        Message::info("ok");
    }
}

?>