<?php
    $all_room = file_get_contents('data/room.json');
    $array = json_decode($all_room);
    foreach ($array as $key => $value) {
        echo "<a href=\"room.php?id=$key&name=$value->Content\" name=\"id\" value=\"$key\">No:$key $value->Content</a>";
    }
?>