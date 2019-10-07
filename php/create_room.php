<?php
    $rooms_path = "../data/room.json";

    $all_room = file_get_contents($rooms_path);
    $array = json_decode($all_room);
    $array[] = [
        'No' => count($array),
        'Content' => $_REQUEST['room']
    ];
    file_put_contents($rooms_path, json_encode($array));
    header('Location: /', true, 301);
?>