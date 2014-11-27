<?php

if(isset($_POST['id_com'])) {
    foreach($_POST['id_com'] as $id_com) {
        NewsCom::del($id_com);
    }
    Message::info("Removal done.");
} else {
    Message::error("Error parameters.");
}

?>