<?php
    $all_talk = file_get_contents('data/'.$_REQUEST['id'].'.json');
    $array = json_decode($all_talk);
    foreach ($array as $key => $value) {
        echo "<p>$value->Content</p>";
    }
?>