<?php
    $rooms_path = "../data/".$_REQUEST['id'].".json";

    $all_talk = file_get_contents($rooms_path);
    $array = json_decode($all_talk);
    $array[] = [
        'No' => count($array) + 1,
        'Content' => $_REQUEST['talk']
    ];
    file_put_contents($rooms_path, json_encode($array));
    header('Location: /room.php?id='.$_REQUEST['id']."&name=".$_REQUEST['name'], true, 301);
?>